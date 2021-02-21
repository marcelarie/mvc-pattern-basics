<p align="center">
<img src="https://achievement-images.teamtreehouse.com/badges-js-angularjs-stage-61.png" width="200"></img>
</p>

# mvc-pattern-basics
In this pill you will learn to implement one of the most common architecture
patterns and you will practice an example following the MVC standards.

## Questions:

1. What is an architecture pattern?

    First we need to understand software architecture:
    SA is how the how the defining components of a software system are organized
    and assembled (AP). How they communicate with each other (M).
    And the constraints the whole system is ruled by (QA).

    The architecture its composed by:
    - (AP) Architectural patterns: Defines the granularity of the components,
        how small or big a component should be.
    - (M) Messaging mechanisms & API's:
    - (QA) Quality Attributes: scalability, adaptabilitty, performance, security
        ...

    Software architecture involve 3 parts:
    - How the defining components of a software system are organized and assembled. Defining means the big major significance components and organized means overall structure of the components. This part is referred to as the architectural pattern of the system.
    - How they communicate with each other. Which are the interfacex through which the components interact. API’s of the individual components as well as the whole system if that is needed. Messaging mechanism.
    - The constrainst the whole system is ruled by. These constrainst are the non-functional attributes of the system or the quality attributes. For example: scalability, resolve ability, resilience, adaptability, etc. Does it need to have high performance, need to be secure… This part affect the architectural pattern choice and impact the development phase. 


2. What is the MVC pattern?  
    MVC Pattern stands for Model-View-Controller Pattern. This pattern is used 
    to separate application's concerns. 
    Split a large application into specific sections that all have their own purpose to illustrate each section.
    - Model: Only does interactions with the data. 
    - View: The view listens to the user events/interactions with the DOM and 
    sends the request to the controller. Then waits for that data to come back
    to render it.
    - Controller: It listens for the view REQUESTS and decides where to send 
    them. If its a data request calls the model to search for that data and 
    sends that information back to the view for the render.

3. Draw a scheme where you understand that the MVC pattern is clearly  
    ![MVC](images/MVC-DIAGRAM.png)

    User request a specific page from a server based on an URL. The server will send all the request information to a specific controller.
    This controller is responsable for handling the entire request from the client and will tell the rest of the server what to do with the request. It acts between the other two sections, model and view.

    The firts thing that happens when a controller receives a request is asked the model for information based on the request.  The model is responsable for handling all of the data logic of a request. This means that the model interacts with the database and handles all validation saving, updating, deleting, etc. of the data. 
    The controller should never directly interact with the data logic it should only use the model to perfotm this interactions. Never have to worry about how handle the data that it sends and receives. Only need to tell the model what to do and respond base don what the model returns. This also means the model never has to worry about handling user request and what to do on failure or success, all that is handled by the controller and the model only cares about interacting with data.

    After the model sends its response back to the controller, the controller then needs to interact with the view to render the data to the user.The view is only concerned with hot to present the information that the controller send it. 
    This means the view will be a templete file that dynamically render HTML base don the data the controller sends.
    The view does not worry about how handle the final presentation of the data. Only cares about how to present it.
    The view will send its final presentation back to the controller and the controller will handle sending that presentation back to the user.

    Have the controller interacting betwwen the model and the view means that the presentation of data and the logic of data are separated which makes creating complex applications much easier.

    1.	The user send a request to the server to get a list of cats.
    2.	The server would send the request to the controller that handles cats 
    3.	The controller would then ask the model that handles cats to return a listo f all cats.
    4.	The model would query the database for listo f all cats and return that list back to the controller. 
    5.	If the response back from the model was successful, then the controller would ask the view associated with cats to return a presentation of the list of cats.
    6.	This view would take the listo f cats from the controller and render the lis tinto HTML that could be used by the browser
    7.	The controller would then take that presentation and returned back to the user 
    8.	If the model returned and error instead the controller would handle that error by asking the view that handles errors to render a presentation for the error and that error presentation would be returned to the user.


1. Explain in which cases you would use this pattern   
    In any app that needs constant data manipulation and dynamic rendering.

-	When you were looking for develop a scalable application
-	When you were looking with another developer it would be a easy way to divide the work in different part and bring a easy   way of colaboration. 
-	When you would want to keep you code in a easy way to interpretation by others.

2. Describe step by step what happens in this pattern from when you create a   
   Request until a Response is returned (you can give more than one example if 
   you consider it necessary).   

    COVID TEST MANAGER APP:  
    1. The user/admin selects the patient record to see the results of the test.

    2. The VIEW listens to that request of the user and sends the event to --->

    3. The CONTROLLER that filters this request. If any data manipulation its 
    needed (it is the case because we need a covid test result )the CONTROLLER 
    calls the MODAL/s that will search for that data specifically.  

    1. The MODAL will ask to the server for the data and will convert it to for 
    example a JSON format to the CONTROLLER. 

    1. Finally the CONTROLLER gives the response to the VIEW that will do all 
    the render work to show the test to the user.
    
    COVID INFO APP:
    1. 

3. What advantages do you think this pattern has to use?    
    If you work on a dynamic web page or application that works with data MVC its
    a fantastic software design pattern. The pros of working with the rendering 
    and the data separated grows exponentially with the size of the application.
      
    The organization of the project will improve.
    If any errors are find you have two firewalls (the modal and the controller)
    before the render.
    Really good to work in parallel on the same project because of the 
    fragmentation. 
    Better debuging.
    Easy to update.

   - Faster development process. MVC supports rapid and parallel development. If an MVC model is used to develop any particular web application then it is possible that one programmer can work on the view while the other can work on the controller to create the business logic of the web application.
   - Provide multiple views. When you were looking for develop a scalable application
   - The Modification Does Not Affect The Entire Model. the user interface tends to change more frequently than even the business rules of the .net development company. It is obvious that you make frequent changes in your web application like changing colors, fonts, screen layouts, and adding new device support for mobile phones or tablets. Adding a new type of view are very easy in the MVC pattern because the Model part does not depend on the views part. Therefore, any changes in the Model will not affect the entire architecture.
   - MVC Model Returns The Data Without Formatting. same components can be used and called for use with any interface.
   - Easy for multiple developers to collaborate and work together.

## TODO's:

- [ ] Implement the MVC pattern using PHP without any library
- [ ] You must have a clear directory structure to be able to implement the pattern
- [ ] You must have a minimum of:
    - (M) 2 models with 3 different functions that obtain information from a database 
        from at least 2 tables
    - (V) 3 views
        At least one of the views will have to be reused for more than one action.
    - (C) 2 controllers
        You must create a main controller ( index.php ) that is responsible for 
        receiving the request from the main page.
        You must create one file for each controller and one function for each action.
        Each action will receive the request as a parameter.

- [ ] There must be almost 4 different actions that demonstrate that the pattern 
is implemented correctly and are capable of displaying the data obtained from 
the source in a view.  URL’s must be controlled by parameters passed by GET method.

- [ ] Design SQL database.

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

2. What is the MVC pattern?  
3. Draw a scheme where you understand that the MVC pattern is clearly  
4. Explain in which cases you would use this pattern   
5. Describe step by step what happens in this pattern from when you create a   
   Request until a Response is returned (you can give more than one example if 
   you consider it necessary).   
6. What advantages do you think this pattern has to use?    

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

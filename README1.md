# Technical Design Review - MVC

## 🔮 Overview 🔮
MVC (Model-View-Controller) is a software architecture pattern, which separates the data and business logic of an application from its representation and the module responsible for managing events and communications.

In this pill you will learn to implement one of the most common architecture patterns and you will practice an example following the MVC standards

<br></br>

## 💡 Main objetives of this project 💡

●	Understand what it is an architecture pattern, what it is used for, and what advantages it can bring to the project
●	Learn to implement the MVC pattern
●	Learn more about the use of this pattern for future implementations in popular Working Frameworks
<br></br>

## 💡 Investigation phase 💡

First of all you must make an investigation to understand better the concepts that you must apply in this pill.

You can get this on the investigation document. ![MVC](InvestigationPhase.md)

<br></br>

## 💡 Project requirement 💡

The project requirement is implement the knowledge learned in a practical part in which the following requirements must be met:
- Implement the MVC pattern using PHP without any library.
- You must have a clear directory structure to be able to implement the pattern.
- Minimum of:
    - **2 Models** with 3 different functions that obtain information from a database from at least 2 tables.
    - **3 View** which at least one of then should be reused by more than one action.
    - **2 Controllers** which one should be the **main controller (index.php)** responsible for receiving the request from the  main page and you must create **one file for each controller** and **one function for each action**. Each action will receive the request as a parameter.
- There must be almost **4 different actions** that demonstrate that the pattern is implemented correctly and are capable of displaying the data obtained from the source in a view.
- **URL’s** must be controlled by **parameters** passed by **GET** method.

- **Project flow**
    All application navigation will be carried out from the same file ("index.php").
    This file, named main controller, must control the parameters received by GET that will indicate which controller you want to include in a dynamic way.

    Once this request is received, and the corresponding controller is already  included in the "index.php", then the controller must carry out the necessary operations with the model and finally include the corresponding view.

    In this way, each time "index.php" is called, it must repeat the process to decide which controller the user is accessing and therefore which controller to include so that it can perform the rest of the operations.


<br></br>

## 💡 Project base on 💡

    For this pill you will have to use the repository that will be provided below as the base directory architecture, therefore you must create all the necessary files to apply the MVC pattern.

    Repository link: https://github.com/assembler-school/php-mvc-pattern-basics

<br></br>

## 💡 Project developed description 💡

<br></br>

## ⚓ Goals, non-goals, and future goals ⚓

<br></br>

### ✅ Goals ✅
- Understand what it is an architecture pattern, what it is used for, and what advantages it can bring to the project
- Learn to implement the MVC pattern.

<br></br>

### ❌ Non Goals ❌

- Have a great design but it will be considered as a good extra point.
- Database doesn't need to have a great design.
- No Object Oriented Programming allowed.

<br></br>

### 🤞🏻  Future Goals 🤞🏻

- Implement the map view what is thinked to show the data distributed on a map.
- Make a login to create diferent session and limit the information that you can get access depend on the user.

<br></br>

## ⚙️ Detailed design ⚙️

- Both the code and the comments must be written in English.
- Use the camelCase code style to define variables and functions.
- In the case of using HTML, never use online styles.
- Remember that it is important to divide the tasks into several sub-tasks so that in this way you can associate each particular step of the construction with a specific commit.
- You should try as much as possible, each commit is associated with a task.
- Delete files that are not used or are not necessary to evaluate the project.
- You must create a correctly documented README file in the root directory of the project (see guidelines in Resources).

<br></br>


## ⏳ Work estimates ⏳

This project estimation delivery is for 3 work days. Including all the documentation and learning phase.

<br></br>


## 🤖 Tech Stack 🤖

- [PHP](https://www.php.net/docs.php).
- [MySQL](https://dev.mysql.com/doc/).
- [MVC Patter](https://en.wikipedia.org/wiki/Model).

<br></br>
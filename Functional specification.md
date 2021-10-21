# 1. Overview
As it was sent form the client, they want to create a MNIST image recognition application and we believe that this project can be done in proper way with the tools that we already have and can deliver top notch user interface so it can be good with all ranges of users as it would be.

# 2. Current State  

As for now we are figuring out way to connect the project with database that have a wide range of images about numbers so we make the result more precise and narrow the field of error so we can achieve this by two ways. the first one is by having server that can handle heavy processing with all the images from different users being dealt with inside, which will eventually increase in the budget. The second option is to have a lot of users who are willing to spend more time on the platform so we take more data input from them, to do it you will need a good user interface that will keep them attached to it.


# 3. Scope
Is to have a good application that is capable of giving the client a precise result about what have users interned for different numbers based on what they have seen, and it will show with the calculation made in the back-end part of the website with the percentage of the users who entered the data and how many of them got it close to the image so it would train itself later in the future.

-**Home page:**  First page that user will see and that purpose is to demonstrate the way the user will choose in numbers.

-**statistics:** On how it will show the results for users who wish to see it.

-**About us:** The team who worked on the project with their role.

# 4. Intended Audience
It works on two types of users, the first one is the input user that is going to feed the database with he info about the numbers as they will choose from the buttons on-screen, the second one are the students who will check if the statistics is good for the photos or not as there is percentage of accuracy that needs to be achieved.


# 5. Standards & Laws
## General Standards:
Application will have these general standards:

1. Will have a simple user interface that can work with all ages.
2. Will be easy for new user to get used to it.
3. Will use the industry best practices in showing album and artists to user.
4. It does not exhibit any errors or clash unexpectedly
5. There is not any user interface glitches
6. Have introduction for how the user shall use it in proper way.

## Browser requirements:
-   Google Chrome
-   Microsoft Edge
-   Mozilla Firefox
-   Microsoft Internet Explorer 10.0+


# 6. Current business model

As for us now, we are trying to get used to the backend side of the program as nearly the whole project will be based on calculation that is made on the server side which will be done by PHP language for its efficiency in dealing with lots of information with speed.

This doesn't mean that there won't be a frontend side as we have to make a good looking frontend to the user stay longer on the website and to show the user all the info they have entered, this can be done by using Bootstrap to make the website responsive on different devices specially on the mobile phones as most of people use there phones nowadays more than before.

# 7. Requested business model
As for right now for the team, we are still learning how to handle the back-end side of the website like calculating how many answers were for favor of one number and how many for the other one and based on it will show the next numbers, also the way for numbers to show randomly for each user as the user won't have the same sequence of numbers that are shown every time. So this project will have a new approach for us in way to integrate between back-end with front-end.

Homepage that will show the numbers with the button around it wither on the side or as a dial pad or under it to leave space and how many numbers did the user will be next to the numbers.

User must have a stable internet connection as the session have to be connected all the time during the survey.


# 8. Request List
-The following table shows how the Database will work with :
  * the window to show the number.
  * statistics for how many numbers did the user do.
  * buttons on screen for the user to choose it.
  
| Module        | ID  | Name         | V   | Description                         |
|---------------|-----|--------------|-----|-------------------------------------|
| Database      | D1  | Name         | 0.1 | users who added their opinion       |
| Database      | D1  | statistics   | 0.1 | Database, tables, relations         |
| Page          | P1  | Results      | 0.1 | all data from users                 |
| Page          | P2  | overall      | 0.1 | all data from users                 |
| Button        | B1  | Numbers      | 0.1 | User can choose numbers             |
| Button        | B2  | Numbers      | 0.1 | submit all user's result            |
| Profile       | PR1 | input times  | 0.1 | User view their date entry times    |
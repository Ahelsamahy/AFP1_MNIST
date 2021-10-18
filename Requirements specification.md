# 1. Current State  

We are a team of data analysts that wants to have a project that can recognize different handwriting for numbers. Currently we want a program that is capable of doing what was mentioned previously in addition to take the data that user entered as the more user enter their opinion about number, the more it will be able to improve itself to differentiate between different shapes for same number. Do achieve this you will have to make app called MNIST. 

Developing a MNIST (Modified National Institute of Standards and Technology) webpage to create statistics based on user input about a specific large database of handwritten digits that is commonly used for training various image processing systems. The database is also widely used for training and testing in the field of machine learning as it works as Hello world project for this area of study and good as starting point. Its simplicity and ease of use are what make this dataset so widely used and deeply understood by nearly are starting learners in the field of machine learning.

# 2. Scope

The aim for this is to make a solid project that can serve as database for user input where they can choose between 10 buttons on-screen (0-9). What number is shown in front of them then this number is taken as result for them then stored in database for afterward, where it is calculated for how many user got a specific number to be the one shown or missed it with another way as the numbers might be difficult for some users/clients to get it right at the beginning. 

-**Home page:**  First page that user will see and that purpose is to demonstrate the way the user will choose in numbers.

-**statistics:** On how it will show the results for users who wish to see it.

-**About us:** The team who worked on the project with their role.

# 3. Intended Audience

It works on two types of users, the first one is the input user that is going to feed the database with he info about the numbers as they will choose from the buttons on-screen, the second one are the students who will check if the statistics is good for the photos or not as there is percentage of accuracy that needs to be achieved.

# 4. Standards & Laws
## General Standards:
Application must have these general standards:

1. Must have a simple user interface that can work with all ages.
2. Must be easy for new user to get used to it.
3. Must use the industry best practices in showing album and artists to user.
4. It does not exhibit any errors or clash unexpectedly
5. There is not any user interface glitches
6. Have introduction for how the user shall use it in proper way.

## Browser requirements:
-   Google Chrome
-   Microsoft Edge
-   Mozilla Firefox
-   Microsoft Internet Explorer 10.0+

## Privacy and Cookie Policy
Obligation to EU privacy laws, it is our responsibility to inform users about how we handle their personal data. For this reason we will provide a Privacy Policy and a Cookie Policy for users to read.

# 5. Current business model

The normal way to deal with the user's data is by getting all the input from the database then calculating how many of them choose specific answer for it in the ratio of the overall chosen answer, after it is done it will help in getting the recognition better for the project so it can deal better with blurry images.

Why we can't use nowadays software is because most of them that can develop this kind of result we want, are either hard for normal user to work with it due to unfamiliar and unfriendly user interface or expensive to buy for our small team. so we hope that we find a middle part in between.

In fact there is not a specific business model as the project is intended to serve as a way to improve machine learning, and there isn't a reason to have a subscription to do it and will serve a survey for user's opinion about numbers.

# 6. Requested business model

As our laboratory doesn't only function on this app, will we integrate it into our system so we will be able to get the result from and implement it to make our other software predict the result in the future for pre-experience results.

As for right now for the team, we are still learning how to handle the back-end side of the website like calculating how many answers were for favor of one number and how many for the other one and based on it will show the next numbers, also the way for numbers to show randomly for each user as the user won't have the same sequence of numbers that are shown every time. So this project will have a new approach for us in way to integrate between back-end with front-end.

Homepage that will show the numbers with the button around it wither on the side or as a dial pad or under it to leave space and how many numbers did the user will be next to the numbers.

User must have a stable internet connection as the session have to be connected all the time during the survey.

# 7. Request List
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

# 8. Overview
Goal of the project is to deliver a new of kind project that shall narrow the gap between MNIST and the users, it will be able to deliver a good user interface that is good for wide range of ages so they can participate in making the statistics better for over all purpose. with all of this they will be able to see how much did they contribute to the project in overall. 

# 9. Use Cases

## User:
- Able to choose input.
- Able to see their score.
- Able to skip to next image or number if they can't understand current one.

## Admin:
- Has all the user privileges
- See the user input.
- Categorize each result based on the numbers.
- Can remove numbers from the database.

# 10. Glossary
 The page should have a good overall looking so it will be good for wide range of users to be familiar with without having problem with, this can be done with proper use of navigation bar that should take you to different section in main page then to the important part which is input section, in addition to good colors that can make the site more appealing to the eyes as the user can input as many numbers as they can without getting eye strain.
 
# 11. Script
Homepage should be simple one with 10 buttons close to the place where user will see the number and next to it is the data entry time the user had done. After it is done then the server should add the number that is selected as the times all the user had done them for this number, for example one user will choose 1 while the other will choose for 2 for the same number as it will be confusing.

when it is done, then it will show the statistics for all numbers based on the data that was entered previously by the user, will show the percentage of the users.




















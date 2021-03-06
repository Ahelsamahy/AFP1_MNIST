# 1. Overview
As it was sent form the client, they want to create a MNIST image recognition application and we believe that this project can be done in proper way with the tools that we already have and can deliver top notch user interface so it can be good with all ranges of users as it would be.

# 2. Current State  
Currently we are a small team of developers that consists of 3 members with the help of 6 seniors, for now we work with small project to improve our self with meeting the requirements of each project and make sure to deliver a top-notch product for the market and raise our market value.

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

## Privacy and Cookie Policy
Obligation to EU privacy laws, it is our responsibility to inform users about how we handle their personal data. For this reason we will provide a Privacy Policy and a Cookie Policy for users to read.

# 6. Current business model

The normal way to deal with the user's data is by getting all the input from the database then calculating how many of them choose specific answer for it in the ratio of the overall chosen answer, after it is done it will help in getting the recognition better for the project so it can deal better with blurry images.

Why we can't use nowadays software is because most of them that can develop this kind of result we want, are either hard for normal user to work with it due to unfamiliar and unfriendly user interface or expensive to buy for our small team. so we hope that we find a middle part in between.

In fact there is not a specific business model as the project is intended to serve as a way to improve machine learning, and there isn't a reason to have a subscription to do it and will serve a survey for user's opinion about numbers.

# 7. Requested business model

As our laboratory doesn't only function on this app, will we integrate it into our system so we will be able to get the result from and implement it to make our other software predict the result in the future for pre-experience results.

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
HTML: Hypertext Markup Language, the foundation of any website.

CSS:  for describing the presentation of Web pages, including colors, layout, and fonts.

JavaScript:  add dynamic behavior to the web page and special effects.

Bootstrap: help in designing website faster and easier. It includes HTML and CSS based design templates for typography, forms, buttons, tables, navigation.

PHP : to manage dynamic content, databases, session tracking, even build entire e-commerce sites

 The page should have a good overall looking so it will be good for wide range of users to be familiar with without having problem with, this can be done with proper use of navigation bar that should take you to different section in main page then to the important part which is input section, in addition to good colors that can make the site more appealing to the eyes as the user can input as many numbers as they can without getting eye strain.
 
 In the forntend we will have several languages, bootstrap that is nearly a mix between CSS and HTML with Javascript for the messages to show for user and calculation, while on the beckend the main language will be PHP to deal with server side operation like adding the input and calculate the result in the end.
 
# 11. Script
when the user open the website for first time, it will show a full screen of the numbers then a keypad with the buttons to enter the data, the user can add the number by clicking on the button or by the keyboard in case of PC or laptop, on mobile or touch screen devices it can also be entered by the touch screen, after the user finish as many as they can do, there will be a statistics page about their results with how many did they enter and the numbers they got to it.

For the backend side, it will get the data from the user then calculate the overall of it with the percentage of each user with their entry example, let's assume that the number shown on the screen is 3, 30% of user will say that it is 2 (as it might be difficult for them to see the number clearly) while the other 70% will say that it is 3, the website will make the calculation and show to the user that there are 70% say that it is 3 while there are 30% say it is 2.

Homepage should be simple one with 10 buttons close to the place where user will see the number and next to it is the data entry time the user had done. After it is done then the server should add the number that is selected as the times all the user had done them for this number, for example one user will choose 1 while the other will choose for 2 for the same number as it will be confusing.

when it is done, then it will show the statistics for all numbers based on the data that was entered previously by the user, will show the percentage of the users.
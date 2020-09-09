SETUP 
 
The application is contained in a zip file. Once installed, the file contained in the zip file is to be extracted inside the following directory:  “C:\xampp\htdocs\”.  

Once extracted, the database containing all the data is contained inside the folder “Database” and is named as “mydb”. 

 
The schema and the data contained is then to be imported MySQL Workbench. Once the database has been imported the application is ready to be used.

APPLICATION INSTRUCTIONS - how to use the application

Once the application is run, the user is brought to the index file where he can decide whether to register or to login to the application.
The user is required to input his or her data for the registration (first name, last name, username, email address and password), once entered the system, the user is redirected to the homepage. 
At this point, the user can decide to either attempt to complete the questionnaire, which will assess the mood of the user, or, complete the diary which allows the user to express his feelings. 
The questionnaire is comprised of 4 parts with 5 questions each. Once completed, the user is shown a graph of the results from the questionnaire. Only one attempt at the questionnaire per day is allowed. The user can see the progress made over time in the progress section.
The diary allows the user to express their feelings, this is comprised of a sentiment analysis system able to identify the mood of the user through the text inserted. The text input by the user is considered as a “page” of their diary, which once completed is stored in the database. The user can ultimately decide to modify or delete one particular page by going to the “My Diary” section. Differently from the questionnaire there is no restriction to the number of times data can be inserted during the day.
Finally, users can modify their login information in the profile info section.

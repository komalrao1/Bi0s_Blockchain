# BI0S BLOCKCHAIN CHALLENGES

## TALKING-WEB

##### Level-1                                                    
**Send an HTTP request using curl**          
![Level-1_jpg](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/d3caddd0-c32c-4fb3-aa21-f759d231c9b4)                    
- In the above level i have used  curl command to make a http request to the given Server.**curl** is command line tool which is used to make connections between server and clients following a specific protocol       
##### Level-2                                                              
**Send an HTTP request using nc**                 
![Level-2_jpg](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/f2fb3a41-fc58-4c71-a18d-3d23491bacc2)                  
- **NetCat(nc)** is a command line tool which is used to make ***TCP(Transmission Control Protocol)*** and ***UDP(User DataGram Protocol)*** with the server. Once after making the connection with the server i have sent a get request to the server then the server responded to the request and i got the flag.                 
##### Level-3                                                   
**Send an HTTP request using python**                       
![Level-3_jpg](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/83649ffb-2340-436e-9067-89b7dd3d9999)                                 
- In python there is a module named requests using which we can send requests manually to the server. I have sent a get request and server responded and in the response data there is flag      
##### Level-4                          
**Set the host header in an HTTP request using curl**                    
![Screenshot from 2024-02-22 12-43-32](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/a0544d1c-01cf-4875-b07c-99c5e7902fc3)                
- In the above level i used curl command to make GET request and **-H** option is used to specify any headers.             
##### Level-5                              
**Set the host header in an HTTP request using nc**                 
![Screenshot from 2024-02-22 12-45-21](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/ecb509f8-e6d7-4372-ae3c-c9d3aa311e71)               
- In the above level i have specified the header after connecting to the sever and sening a succeful GET request                    
##### Level-6                                           
**Set the host header in an HTTP request using python**                  
![Screenshot from 2024-02-22 13-10-40](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/e6d4dc55-3135-428c-a061-9f08f4562a36)                      
- In this level i have used a parameter **headers** to specify the header.                 
##### Level-7                           
**Set the path in an HTTP request using curl**                    
![Screenshot from 2024-02-22 15-47-03](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/9d731ba3-a761-4aa4-b2bb-2a715204370a)                                
- In this level i have specified the path by using absolute path of server path.         
##### Level-8                               
**Set the path in an HTTP request using nc**              
![Screenshot from 2024-02-22 16-18-39](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/e9a0c4d6-ee3f-43a3-80ba-9f70835a30bf)                      
- In this level i have specified the path the path by using relative path of the server.Once we made a connection it will be set to our path then we can open all thw files. It is just like opening subpages in a website or redirecting to other pages in a webpage.                       
##### Level-9                     
**Set the path in an HTTP request using python**                
![Screenshot from 2024-02-22 16-37-57](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/ea48df7e-ee20-4b22-9ebe-fc1d2efc604c)                    
- In this level i have specified the path by using absolute path of server path.                  
##### Level-10                  
**URL encode a path in an HTTP request using curl**                    
![Screenshot from 2024-02-22 19-59-48](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/d3203121-7cfa-4d43-ba0b-a09af45fca92)                        
- In this level i have encoded the url using **%(hex of special character)*** to replace the special characters and spaces. If we directly use space and special characters in url the we get error.                     
##### Level-11                                      
**URL encode a path in an HTTP request using nc**                                  
![Screenshot from 2024-02-22 20-05-49](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/6a4a1b41-1056-4176-9bab-4a1a1d554198)                              
- In this level i have encoded the url using **%(hex of special character)*** in the get requests to replace the special characters and spaces. If we directly use space and special characters in url the we get error.                       
##### Level-12                                    
**URL encode a path in an HTTP request using python**                                    
![Screenshot from 2024-02-22 20-16-22](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/6e302922-2ada-4874-80b6-b2b25dbe3ae5)                                  
- In this level i have encoded the url using **%(hex of special character)*** to replace the special characters and spaces. If we directly use space and special characters in url the we get error.                                        
##### Level-13                 
**Specify an argument in an HTTP request using curl**                                     
![Screenshot from 2024-02-22 20-25-01](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/f263964c-77c5-4a80-ad89-42e2e26f7c34)                        
- In this level i have used the paramters. we use parametrs to send data, specify more about the file and analyze about the sessions.        
##### Level-14            
**Specify an argument in an HTTP request using nc**               
![Screenshot from 2024-02-22 20-36-03](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/37cc5087-5ec5-47a7-b617-9c656ddfe47c)                 
- Same as the above i used the argument. and appended it to the relative path or url                    
##### Level-15              
**Specify an argument in an HTTP request using python**                                
![Screenshot from 2024-02-22 20-40-46](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/1bc0b9f9-220c-4ea8-8c4c-92a583bdb622)                                                
- Here i just used python request module for this level but the syntax of parameter is same as curl and nc. we just append to end of url .**?** indicates the query argument                    
##### Level-16                                       
**Specify multiple arguments in an HTTP request using curl**                   
![Screenshot from 2024-02-22 23-09-57](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/79768f53-f023-4cb9-b0cb-15737172052c)                  
- Here i have sent 2 arguments in the request. we can send multiple requests by using **&** after each argument.                 
##### Level-17                                            
**Specify multiple arguments in an HTTP request using nc**                          
![Screenshot from 2024-02-22 23-49-38](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/c2e0fbf5-5d3d-4e5b-a453-13037ed6b474)                        
- Here intially i made a TCP connection with the server then i specified two arguments in the GET request by using **&** after the first argument.                     
##### Level-18                              
**Specify multiple arguments in an HTTP request using python**                            
![Screenshot from 2024-02-22 23-55-29](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/32b38ecc-25ea-4f9e-95e5-92090e030d0e)                  
- Here i have used python to send a GET request.I specified two arguments in the GET request by using **&** after the first argument.                    
##### Level-19                                 
**Include form data in an HTTP request using curl**                      
![Screenshot from 2024-02-23 00-19-21](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/2a7cd296-6175-4375-8b9e-4a3c04d774d7)                  
- Here i have used curl to send formdata . **-d** option is used to send data, We can send other type of data also . By default Content-Type header is set related to form data. If we send other type of data we also need to specify the **Content-Type** header of that data.                          
##### Level-20                                    
**Include form data in an HTTP request using nc**                         
![Screenshot from 2024-02-23 20-59-48](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/d6f6986e-2e17-465a-8cc9-5548d3038bf6)                     
- Here i have used nc command to make a TCP connection to the server.Then i have sent a GET request containg form data . To send form data the Headers Content-Type and Content-Length must be used .if we dont use the server cannot understand which type of data we are sending and we get error
##### Level-21                                  
**Include form data in an HTTP request using python**
![Screenshot from 2024-02-23 21-39-04](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/83ffea81-7242-45d3-bd97-e042b6aba7c7)
- Here i have used python http requests to make a response object . The response object has inbuilt parameters data with which we can send data . I have sent data by passing data argument and header argument.I also sent the headers of Content-Type.                            
##### Level-22                                     
**Include form data with multiple fields in an HTTP request using curl**                             
![Screenshot from 2024-02-24 06-02-16](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/7eda13c7-b687-4fce-8f7a-b05812496827)                            
- Here i have done the same thing as which i have done for single field using curl but i have used the **-d** option two times to send multiple fields of data.                       
##### Level-23                               
**Include form data with multiple fields in an HTTP request using nc**           
![Screenshot from 2024-02-24 07-14-56](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/d09f3365-0bd2-417f-b726-7a6f24458b22)                 
- Here i have done the same thing as which i have done for single field using nc but i have used **&** to seperate the two key-value pairs of data.              
##### Level-24                                  
**Include form data with multiple fields in an HTTP request using python**                  
![Screenshot from 2024-02-24 07-32-53](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/072e2ceb-90b4-4e98-8dc5-7eae053d48da)          
- Here i have done the same thing as which i have done for single field using python but i have specified two key-value pairs in the data .                    
##### Level-25                                         
**Include json data in an HTTP request using curl**                    
![Screenshot from 2024-02-24 09-09-07](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/e99547c4-4257-4210-8331-cbae040b61ff)
- Here i have sent the json data to the client by specifyting the Content-Type header and sent the data. **-H** option is used for specifying header and **-d** option is specified for sending data.                
##### Level-26                                  
**Include json data in an HTTP request using nc**                                
![Screenshot from 2024-02-24 09-19-46](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/50d060b4-3f1f-4d51-b5d0-6d06a54a0544)                           
- Here i have sent json data by specifyting the Content-Type header as **application/json** this header the server that we are sending json data.json data format is same like dictionary format in python.             
##### Level-27                          
**Include json data in an HTTP request using python**                                    
![Screenshot from 2024-02-24 09-31-52](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/3baa9895-7841-4cb3-bdb1-cf5ff92e5894)                       
- Here i have sent json data by passing data argument and headers argument to the response object. Header i have used is **application/json** this specifies the server that we are sending json data.                
##### Level-28                            
**Include complex json data in an HTTP request using curl**                                        
![Screenshot from 2024-02-24 10-25-47](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/636a6dea-9d85-428c-b845-13b095787250)                                       
- Here i have sent complex json data by appllying concept of dictionary and list in python .Using that i have written the data in such a way that server can understand and i have used the header **application.json**.            
##### Level-29                                        
**Include complex json data in an HTTP request using nc**            
![Screenshot from 2024-02-24 10-57-04](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/6e5dbde0-798d-49f8-ad45-6c2112d75858)                    
- In this level i have sent complex json data by applying dictionary and List concept in python. Using that i have written the data in such a way that server can understand and i have used the header **Content-Type** as **application.json**. and **Content-Length** as length the data we are sending.        
##### Level-30      
**Include complex json data in an HTTP request using python**               
![Screenshot from 2024-02-24 11-01-34](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/9a93e5ab-cfef-4efa-8da6-a33e26548601)                     
- In this level i have sent complex json data by applying dictionary and List concept in python. I have used the header *Content-Type* as **application/json** this wiil specify the server that we are sending json data                          
##### Level-31                    
**Follow an HTTP redirect from HTTP response using curl**                  
![Screenshot from 2024-02-24 11-18-28](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/b87d27ee-3bf8-48e7-a2b3-ac0b0188cc80)                
- In this level i have used curl command with **-L** option. **-L** option will automatically redirect to the response received from the server.                
##### Level-32                                 
**Follow an HTTP redirect from HTTP response using nc**
![Screenshot from 2024-02-24 11-55-02](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/cf843180-0537-49c1-8ac7-26c1e6c0e74b)                    
- In this level i have used nc command to make a tcp connection to the given Host. then i got a response contating  Header called **Location**. This header will specify us about redirections if any exists.        
##### Level-33                                      
**Follow an HTTP redirect from HTTP response using python**             
![Screenshot from 2024-02-24 12-05-16](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/d68bc0b0-2f35-42c9-a7c1-2f0e5f86cae4)                                     
- In this level i have used pythons requests module to send a **GET** requests to the given host. Then using **url** attribute to the response object i have got the url of redirection. Then i have appended this url to the Host address and sent a **GET** request agin. Then i got the flag.                         
##### Level-34                                   
**Include a cookie from HTTP response using curl**               
![Screenshot from 2024-02-24 13-34-35](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/9952ea22-2176-41ab-9176-ab7a9d003e54)                  
- In this level i have used curl command with **-b** option. The **-b** is used to send cookies to the Host. the data must have key-value pair as key=value format included in double quotes.    
##### Level-35                                   
**Include a cookie from HTTP response using nc**                          
![Screenshot from 2024-02-24 13-40-50](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/5549acb5-431d-41a7-8eed-dcc30aeab3d6)                              
- In this level i have used nc command to make a tcp connection with the Host. Then i have sent a **GET** request containing a header named **Cookie** which is used to send cookies to the server.the cookie data in the header must be key=value form.                                    
##### Level-36                                    
**Include a cookie from HTTP response using python**                     
![Screenshot from 2024-02-24 14-07-59](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/95753b96-eba3-4009-9e7f-60cc90652e44)                      
- In this level i have used python requests module to make a **GET** request to the HOST. Then using text attribute to the response object i have got the flag.      
##### Level-37                       
**Make multiple requests in response to stateful HTTP responses using curl**                                
![Screenshot from 2024-02-24 20-48-48](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/1ac82f24-9d8a-4690-9ec6-15c8d8aeb9ff)                                
- In this level i have used curl **-b** and **-c** option to send and store infromation of cookies. **-b** option is used to send cookies to the server and **-c** option is used receive cookie from the server.                       
##### Level-38                                                  
**Make multiple requests in response to stateful HTTP responses using nc**                              
![Screenshot from 2024-02-24 20-53-28](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/9b4ee332-0797-4f58-819e-bae152d63554)                                   
- In this level i have used **Cookie** header to send cookie data to the server, and received response from the header containing of **Set-Cookie**. The **Set-Cookie** header is sent from the server to the client to use the cookie in the subsequent requests.                          
##### Level-39                                                             
**Make multiple requests in response to stateful HTTP responses using python**                                                     
![Screenshot from 2024-02-24 21-03-44](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/c74f1e71-0f75-42d0-b9ec-af34578312f9)                                   
- In this level i have used **cookies** argument to specify the cookie data . In the first request i used cookies attribute to the response and received cookie data. If it has any data then data  then cookie data is again sent to the server using **cookies** parmeter by specifying in request.                          













 

























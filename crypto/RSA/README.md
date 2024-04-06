# RSA-CHALLENGES                  
### **Flags**                                    
![rsa_flag](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/5fe2a127-17c0-4310-aac9-5b8d383cce40)                                 
***                     
                                                                            
                                                                                         
                                       
                                                                                                                                                                                                         
                                                                                                                                                                                                 
### **Challenges**                                                                                                                                                                
**1st-Challenge**           
![rsa_1](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/01256dfc-adc3-441c-ad7d-021c9957fd98)                       
- Here the challenge is to compute the power 3 of the given number. I have done it by using python.                  
**Code**                           
![rsa_11](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/20808456-15c9-4841-bac6-a23984849e7f)                                            
**2nd-Challenge**                      
![rsa_2](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/c8cb3dfb-dc8a-428d-b93c-e03c444d0331)                            
- Here the challenge is to compute the modulo of (a*b) mod c. I have done it using python.                
**Code**                         
![rsa_22](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/1cfd36b1-cf4d-437b-9e50-f01e02a20a89)                                
**3rd-Challenge**                               
![bi0s33](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/ec83f8a2-f34f-4aff-a4a2-8a75164a8853)                                  
- Here the challenge is to convert the given number into bytes. Converting integer to bytes is nothing but we will represent the given number as binary number and then we will take each byte binary number and put it as a byte string.                     
- I have done it using python. The python has a inbuilt *to_byte* method which will convert the integer to bytes. it will take two parameters one is length of number(total number of bytes of that number) and byteorder. byte order is about how we can represent the output byte. if we use byte order as *big* Least significant bit is stored at low memory address. if we use small then least significant bit is stored at high memory address.                          
**Code**                      
![bi0s3](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/3424a7f3-7c9b-46c3-8595-3dd1e8b9990c)                                      
**4th-Challenge**                          
![bi0s44](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/63c11675-6c4d-4cfa-b206-38f556670401)                             
- In this level the challenge is to convet the bytes into integer. I have done it using python. python has a inbuilt *int.from_byte()* method. this has two parameters bytestring and byteorder.           
**Code**                       
![bi0s4](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/91b40f4d-4936-4dd5-9463-75f60305d4c1)                               
**5th-Challenge**                                    
![bi0s55](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/43a63af6-37be-4c40-8d17-47efa1dd16f0)                                 
- In this level the challenge is to encrypt the given byte string. First i have converted the byte string to integer. Then we can encrypt the message using the formulae of rsa.                
- In RSA the encrypted message **c=(msg\*\*e) mod n**. So i applied the same formulae and finded out the ciphertext.                     
**Code**                        
![bi0s5](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/96bb9f91-aae3-4643-9c91-2c03306d5e20)                               
**6th-Challenge**                             
![bi0s6](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/25f77e64-8314-4acb-beab-ce08e422806a)                             
- In this level the challenge is to decrypt the ciphertext. it can be done using the formulae **plaintext=(ciphertext\*\*d) mod n**. I have calculated this using the python.                        
**Code**                           
![bi0s66](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/1f474df1-4dab-44b6-abd2-1741fb38ae5d)                                    
**7th-Challenge**                               
![bi0s7](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/7e6849d7-d1b1-42e4-ae91-fedaf7b8e423)                                              
- In this level the Challenge is to findout the Euler's Totient which is phi. It can be calculated using **(p-1)\*\*(q-1)**. I have calculated it using python.               
**Code**                                         
![bi0s77](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/9c806803-7ea7-485a-b437-51ce26fd056d)                                        
**8th-Challenge**                                 
![bi0s88](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/9cf71006-4300-480e-be29-fe4ad42330bc)                               
- In this level the challenge is to find modular multiplicative inverse of e. The modular multiplicative inverse of e exists only if gcd(e,n)=1. In python pow() is a inbuilt function it takes three arguments base,exponent,modulus(optional). it calculates **(base\*\*e) mod n**.                              
**Code**                            
![bi0s8](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/c8af32b6-2bfc-4b88-ac31-4c326fc233a1)                                   
**9th-Challenge**                             
![bi0s99](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/3528950f-585b-4aaf-8ac6-0c502fa9a2b2)                       
- In this level the challenge is to decrypt the ciphertext. The formulae for decryption ciphertext in rsa is **msg=(cipher\*\*d) mod n**. where d is the private key which is the modular multiplicative inverse of e modulo phi. I have used pow() function to find the d.                                
**Code**                                                                 
![bi0s9](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/27c74b1f-cddf-4d52-b41e-4d2d894c8c35)                                  
**10th-Challenge**                                      
![bi0s10](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/cd85c3a0-b1c5-42aa-897e-ca997ad19bcc)                            
- In this level the challenge is to decrypt the ciphertext. Here the e value is very small.                        
- In general the ciphertext can be found by the formulae **ct=(msg\*\*e) mod n**. If msg\*\*e is small than n then **ct=(msg\*\*e) mod n=msg\*\***. Since, **ct=msg\*\*3** then msg will become cubth root of ct. So **msg=ct\*\*(1/3)**                               
- By applying the same logic i have found the msg using python.
**Code**                                                           
![bi0s10_1](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/2a8bc656-003a-4075-9e4b-fb4305ede61e)                                      
                                                      
                                                 
-------------------------------------------------------------------------------------THE END-------------------------------------------------------------------------------------

# CRYPTO CHALLENGES

#### 1.RSA
- **Modulo Arithmetic**
![picoCTF](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/27efd60a-9479-46be-9904-11df119d7ec3)                                    
**I Have solved this by writing a python script which calculated the modular arithemetic of each number in the message and maos to the given set of alphabets, phone numbers and underscore**              
![Modulo python](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/67985182-6019-45f3-ae78-bd84fa722567)                        
---                   
- **RSA challenge**
![question](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/0803ffbd-6aa2-4f0b-8f5d-af81eef1bc46)                         
**Sol**   
![challenge](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/3c016bfd-5d3c-4801-9340-791b7ab74578)                           
- **Here i have found the signature from the message using the formula, ***m=c<sup>e</sup> (modn)*** where n=p*q,m= message and e is the modular multiplicative inverse of ***d modulo(lcm(p-1,q-1))*****                           
----                   
#### 2.STREAM CIPHERS AND BLOCK CIPHERS
- **Challenge**            
  ![generate](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/011097fa-9b88-4ad6-a3a5-a1dc71948b07)                              
**Sol**
  ![ciphers](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/d3e21d1a-10f3-43d0-985c-88263fca21d0)                                 
  **Here i have used applied the xor property which is a^b=c, where a=msg,b=key and c=ciphertext. we can get the msg by performing xor operation with c and a which is c^b.In the challenge it was given two ciphertexts and key is same. so let message1 be m1 and message2 be m2 and key is k,ciphertexts are c1 and c2.**
  > (m1^k)^(m2^k)=c1^c2                     
  > (m1^m2)^(k^k)=c1^c2                             
  > (m1^m2)^(0)=c1^c2                                
  > m1^m2=c1^c2                              
  > m1=(c1^c2)^m2                           
  > m2=(c1^c2)^m1                                            
**After several tries i got the key,welcome message and flag. i done the process used in generate.py to generate the ciphertext and both are matching. Here are the ciphertexts**                                                  
![verify](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/917bf5a3-dbd9-469a-8468-82c1087be95e)                                                  
---             
- **Cryptorals**                                        
  > ***Challenge-1***                                    
![challenge1](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/689a39ae-1707-494b-8117-afb418a423f1)                       
![sol](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/e304fae9-eb7d-49b7-a0b2-0f04907aaccf)                                 
![ans](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/ed3e3816-aced-48ab-ae98-0d698014f3e8)                   
----
**Here i have written a python script using base64 module. using that i converted hex to bytes and then encoded it in base64.**                              
  > ***challenge-2***                                 
![Screenshot 2024-03-07 125010](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/288c8904-4362-401c-85e6-9e8f9872c91a)
![Screenshot 2024-03-07 125136](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/b4b4a963-0f29-4284-96df-d141e802700b)
![Screenshot 2024-03-07 125127](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/22670d1f-4fa4-4dea-9cac-7661cc2a6e4d)
**Here I have written a python scripts which converts the two string into byte and finds the xor of the two byte strings. the output is stord in a byte array.**    ----
> ***challenge-3***                              
![Screenshot 2024-03-07 125736](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/058719c8-512e-4a1c-b047-2d33c34ab895)                                 
![Screenshot 2024-03-07 125815](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/e24e0e3f-7322-4236-8957-2bc5002f5c6d)               
![Screenshot 2024-03-07 125845](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/af0beb3c-b046-4b93-ae8a-052f41edc450)                  
**Here i have written a python script which does the xor of given ciphertext with each ascii character and results output. Our message will mostly have alphabet characters and numbers. So what i have done is i made a list of all alphabets and numbers. using that i sorted the output message.**
> ---- 
> ***challenge-4***                                                 
![Screenshot 2024-03-07 130529](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/2b759ba7-b4e8-43ca-9ead-9836389cde3a)                      
![Screenshot 2024-03-07 130622](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/9f6293b9-144c-4142-a451-5712a8bcc6c6)                   
![Screenshot 2024-03-07 130637](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/e043b1e7-2c39-40b4-8c1a-1f3481bccd62)                    
**Here i have applied the same above logic . But the difference is i done this for each line in the file.**
> ----                               
> ***challenge-5***                                                  
![Screenshot 2024-03-07 130855](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/e9eaf690-ef28-424d-8191-d487363503ba)                 
![Screenshot 2024-03-07 130941](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/87cee4b7-1302-46a2-9cfb-86d96f0e07f2)                             
![Screenshot 2024-03-07 131010](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/2417151a-453c-4248-a922-f7ec67d250a3)                  
**Here i have written a python script using itertools module. i have xored the message with key for each iteration.**
> ----                     
> ***challenge-7***                                     
![Screenshot 2024-03-07 131402](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/46f029bd-71e7-453a-8b68-3500bbb4f9c9)                    
![Screenshot 2024-03-07 131427](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/40f858b7-98ae-4b25-b279-e4896923bcf6)                                 
![Screenshot 2024-03-07 131536](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/34d9d8d1-6a8c-47ff-bf3d-16e50a1ce6c8)                   
**Here i have written a pythonscript to decrypt AES encryption using ***PyCryptodome*** module.**
> ----          
> ***challenge-8***                                     
![Screenshot 2024-03-07 131857](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/5399dda7-2cdd-4453-9e9b-9b63d62dc7bb)
![Screenshot 2024-03-07 132215](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/ed55eb90-1406-450e-88df-61b08049a331)
![Screenshot 2024-03-07 132036](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/0b63bb9e-5162-4a31-9158-1c77c82eca8c)                          
**Here i have used the logic of AES encryption in ECB mode. The ECB mode will give same ciphertext for same message, which means the data encrypted in ECB mode can easily be hacked.There is only one ciphertext which has same msg repeated.The observation is below**
![Screenshot 2024-03-07 132022](https://github.com/komalrao1/Bi0s_Blockchain/assets/147682987/58b7659d-25e5-4a88-8dfe-c132dec00917)
> ----




-----------------------------------------------------------------THE END-----------------------------------------------------------------                                              


           

                 
























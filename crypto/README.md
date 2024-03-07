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









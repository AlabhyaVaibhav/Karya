
# coding: utf-8

# In[97]:


import requests
import urllib
URL = "http://smsgateway.me/api/v3/messages"
PUSH_ADHAR = "http://alabhya.design/ah2018/index.php?message="
email = "mikejason291@gmail.com"
password = "iamakshit22"
PARAMS = {'email':email,'password':password}
r = requests.get(url = URL, params = PARAMS)
data = r.json()
number = data["result"][0]["contact"]["number"]
message = mess = data["result"][0]["message"]
send = PUSH_ADHAR + message + number
r1 = requests.post(url = send)


# In[99]:


number = 919810474904
URL1 = "http://smsgateway.me/api/v3/messages/send"
welcome = "Thank you for registering with us, our representative would be in touch with you"
device = 87713
PARAMS1 = {'email':email,'password':password,'device':device,'number':number,'message':welcome}
r = requests.post(url = URL1, params = PARAMS1)


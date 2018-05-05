
# coding: utf-8

# In[90]:


import os
import sys
import numpy as np
from dict import *


# In[86]:


description = "He is a pipefitter"


# In[91]:


#desc = description.split()
desc = sys.argv


# In[88]:


i=0
j=0
for i in range(len(desc)):
    for j in range(len(skills)):
        if desc[i] in skills:
            print (desc[i])
            break


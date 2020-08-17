#!/usr/bin/python

import smtplib
from smtplib import SMTPException

sender = 'rajdeep@prumobi.com'
receivers = ['saurabh.shukla053@gmail.com']
subject = 'Grab dinner At 6 pm'
body = 'Hello all comes to dinner at 6 pm in Sturday ?'
    
message = f"Subject: {subject} {body}"
#f"Hello, {name}. You are {age}."
#message = "Hello!"

try:
    session = smtplib.SMTP('smtp.gmail.com',587)
    session.ehlo()
    session.starttls()
    session.ehlo()
    session.login(sender,'Rajdeep@8860')
    session.sendmail(sender,receivers,message)
    session.quit()
except SMTPException as e:
    print(e)

#https://myaccount.google.com/u/1/lesssecureapps - less secure app k liye off
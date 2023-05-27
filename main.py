from Jarvis import MainExe
from Body.Speak import Speak
from Features.clap_detection import Tester

data = Tester()
if "True-Mic" == data:
    Speak("hello sir")
    MainExe()

# import speech_recognition as sr 
# import os

#1 - Liste : Hindi or English

# def Listen():
#     r = sr.Recognizer()

#     with sr.Microphone() as source:
#         print("Listening...")
#         r.pause_threshold = 1
#         audio = r.listen(source,0,8) #Listening
#     try:
#         print("Recognizing...")
#         query = r.recognize_google(audio,language="en")

#     except:
#         return ""

#     query = str(query).lower()
#     print(query)
#     return query



# def WakeUpDetected():
#     query = Listen().lower()
#     if "wake up" in query:
#         # os.startfile(r"main.py")
#         # print("yest sir")
#         MainExe()
#     else:
#         pass

# while True:
#     WakeUpDetected()

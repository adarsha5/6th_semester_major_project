
import os
import webbrowser
import wikipedia
import subprocess
import webbrowser
import http.server
import socketserver
from time import sleep
import keyboard
import pyautogui



def run_php_locally(php_file_path):
    handler = http.server.SimpleHTTPRequestHandler
    with socketserver.TCPServer(("", 8000), handler) as httpd:
        print("Server running at http://localhost/project1/")
        webbrowser.open_new_tab("http://localhost/project1/" + php_file_path)

from Body.Listen import MicExecution
print(">> Starting The Jarvis : Wait For Some Second")
from Body.Speak import Speak
from Features.clap_detection import Tester
Speak(">> Starting The Jarvis : Wait For Some Second")

def webcam():
    Speak(">> You can say now")
    while True:
        Data = MicExecution()
        Data = str(Data)
        Data = Data.lower()
        if 'task' in Data:
            tasks()
            break
        if 'stop' in Data:
            Speak("Ok sir ")
            break
        from Brain.AIBrain import ReplyBrain
        Reply = ReplyBrain(Data)
        Speak(Reply)



def tasks():
    Speak(">> You can execute the tasks using jarvis ...")
    while True:
        query = MicExecution()
        # query = input("Enter : ")
        query = str(query)
        query = query.lower()
        # if 'wikipedia' in query:
        #     Speak("Searching wikipedia")
        #     query= query.replace("wikipedia ","")
        #     results = wikipedia.summary(query,sentences=2)
        #     Speak("Accpording to wikipedia")
        #     print(results)
        #     Speak(results)
        if 'you can stop now' in query:
            Speak("Ok sir ")
            break
        elif 'play death note' in query:
            Speak("opening deth note")
            death_note= 'D:\\deth note'
            movie=os.listdir(death_note)
            # print(songs)
            import random
            os.startfile(os.path.join(death_note,movie[random.randint(0,35)]))
        elif "visit" in query:
            query=query.replace("visit ","")
            link= f"https://www.{query}.com/"
            print (link)
            Speak(f"Visiting {query}")
            webbrowser.open(link)
        elif 'open'  in query:
            query=query.replace("open ","")
            pyautogui.press('win')
            sleep(1)
            keyboard.write(query)
            sleep(1)
            keyboard.press('enter')
            sleep(0.5)
            Speak(f"Opening {query}")
        elif 'talk' in query:
                webcam()
                break
        
        sleep(5)
        Speak(">> give me the next task...")

    
    
def MainExecution():
    Speak("Hello Sir")
    while True:
        Data1 = MicExecution()
        Data1 = Data1.lower()
        if 'talk' in Data1:
            Speak("Yes sir... I'm Jarvis , I'm Ready to talk with you Sir.....")
            webcam()
            Speak("good bye ....")
            break
        elif 'task' in Data1:
            Speak("Yes sir... I'm Jarvis , I'm Ready to do task for you...")
            tasks()
            Speak("good bye ....")
            break
        elif 'stop' in Data1:
            Speak("Ok sir ")
            break
        else:
            Speak("Pleas say again")


def ClapDetect():
    query = Tester()
    if "True-Mic" == query:
        run_php_locally("another1.php")
        print("")
        Speak(">> Clap detected!! >>")
        print("")
        MainExecution()
    else:
        pass

ClapDetect()
# MainExecution()
# while True:
#     from Brain.AIBrain import ReplyBrain
#     kk= input("Enter : ")
#     print(ReplyBrain(kk))
# tasks()
# from Brain.AIBrain import ReplyBrain
# abc = ReplyBrain("hi jarvis")
# Speak(abc)









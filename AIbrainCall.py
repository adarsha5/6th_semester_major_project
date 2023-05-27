from Brain.AIBrain import ReplyBrain
from Body.Speak import Speak
f = open("Brain\\pqr.txt", "r")

# print(f.read())
data=f.read()
data=ReplyBrain(data)
Speak(data)

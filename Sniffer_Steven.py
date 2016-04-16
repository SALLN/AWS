from socket import*
from datetime import*

Ipv4 = "54.191.102.46";
port =55056
serverSocket= socket(AF_INET,SOCK_DGRAM) 
serverSocket.bind((Ipv4,port))
while True:

	mensaje, addr=serverSocket.recvfrom(1024)
	datos=str(mensaje)
	print(datos)

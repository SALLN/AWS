import mysql.connector
import time
from datetime import*
from socket import*

#Ipv4 = '172.31.44.227'
Ipv4 = '192.168.0.15'
port =80
serverSocket= socket(AF_INET,SOCK_DGRAM) 
serverSocket.bind((Ipv4,port))
while True:
    data, ddr=serverSocket.recvfrom(1024)
    datos=str(data)
    print(datos)
    #latitud=str(datos[19:21]+'.'+datos[21:26])
    #longitud='-'+str(datos[28:30]+'.'+datos[30:35]) 
    #datos="&10#TIMETIMETI+LATITUD-LONGITUD*ID=GrupoTicoll_car1<"
    s1=datos.find("&")
    s2=datos.find("#")
    tim=datos.find("+")
    latlon=datos.find("-")
    i=datos.find("ID=")
    j=datos.find("_")
    k=datos.find("<")
    peso=str(datos[s1+1:s2])
    time=str(datos[tim-10:tim])
    latitud=str(datos[latlon-7:latlon-5]+'.'+datos[latlon-5:latlon])
    longitud=str(datos[latlon+2:latlon+4]+'.'+datos[latlon+4:latlon+9])
    usuario=str(datos[i+3:j])
    id_vehiculo=str(datos[j+1:k])
    #print(data)
    timestamp_syrus='00'+str(time)
    weeks=timestamp_syrus[2:6]
    weeksTosecond=float(weeks)*7*24*60*60
    days=timestamp_syrus[6]
    daysToseconds=float(days)*24*60*60
    seconds=float(timestamp_syrus[7:12])
    tiempogps=weeksTosecond+daysToseconds+seconds
    gpsutc=(datetime(1980,1,6) - datetime(1970,1,1)).total_seconds();
    fecha=str(datetime.utcfromtimestamp(tiempogps+gpsutc-18000))
    fecha_hora_server = time.strftime("%c")
    #fecha_n=fecha[0:10]
    #hora_n=fecha[11:19]
    #idgrupo=datos[47:53]
    #db = mysql.connector.connect(user='root',password='ticoll',port="3306",database='diseno')
    #cursor = db.cursor()
    #cursor.execute("INSERT INTO 'usuario' (LATITUD,LONGITUD,FECHA_HORA,ID_VEHICULO,FECHA_HORA_SERVER,PESO) VALUES('%s','%s','%s','%s','%s','%s')" % (latitud,longitud,fecha,id_vehiculo,fecha_hora_server,peso))
    #db.commit()
    #cursor.close()
    #db.close()
    print("Peso: "+Peso)
    print("Latitud: "+latitud)
    print("Longitud: "+longitud)
    print("Hora Server: "+fecha_hora_server)
    print("Fecha syrus: "+fecha)
    print("Id_vehiculo: "+id_vehiculo)
    print("Usuario: "+usuario)

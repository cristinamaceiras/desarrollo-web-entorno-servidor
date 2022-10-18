import random

puntuacion = 0

def comprobar(op):
    while (op != "a") & (op != "b") & (op != "c"):
        op = input('Debes introducir solo a, b o c: ')

def correcta(op, correcta, puntuacion):
    if op == correcta:
        puntuacion += 10
    else:
        puntuacion -= 5
    return puntuacion

def pregunta1(puntuacion):
    print("¿En que ciudad está la torre Eiffel?")
    print("a) Madrid")
    print("b) Londres")
    print("c) Paris")

    opcion = input("Respuesta: ")

    comprobar(opcion)
    puntuacion = correcta(opcion, "c", puntuacion)
    print()

    return puntuacion

def pregunta2(puntuacion):
    print("¿En que ciudad está la torre de Hércules?")
    print("a) A Coruña")
    print("b) Lugo")
    print("c) Pontevedra")

    opcion = input("Respuesta: ")

    comprobar(opcion)
    puntuacion = correcta(opcion, "a", puntuacion)
    print()

    return puntuacion

def pregunta3(puntuacion):
    print("¿En que ciudad está la Sagrada Familia?")
    print("a) Tarragona")
    print("b) Barcelona")
    print("c) Girona")

    opcion = input("Respuesta: ")

    comprobar(opcion)
    puntuacion = correcta(opcion, "b", puntuacion)
    print()

    return puntuacion


lista = [1,2,3]
preguntar = random.sample(list(lista), k = 2)

for preg in preguntar:
    if preg == 1:
        puntuacion = pregunta1(puntuacion)
    elif preg == 2:
        puntuacion = pregunta2(puntuacion)
    else:
        puntuacion = pregunta3(puntuacion)

print("Tu puntuación es de: " + str(puntuacion))

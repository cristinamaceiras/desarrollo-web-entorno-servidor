puntuacion = 0

def comprobar(op):
    while (op != 'a') & (op != 'b') & (op != 'c'):
        op = input('Debes introducir solo a, b o c: ')

def correcta(op, correcta, puntuacion):
    if opcion == correcta:
        puntuacion += 10
    else:
        puntuacion -= 5
    return puntuacion

#pregunta 1
print("¿En que ciudad está la torre Eiffel?")
print("a) Madrid")
print("b) Londres")
print("c) Paris")

opcion = input('Respuesta 1: ')

comprobar(opcion)
puntuacion = correcta(opcion, "c", puntuacion)
print()

#pregunta 2
print("¿En que ciudad está la torre de Hércules?")
print("a) A Coruña")
print("b) Lugo")
print("c) Pontevedra")

opcion = input('Respuesta 2: ')

comprobar(opcion)
puntuacion = correcta(opcion, "a", puntuacion)
print()

#pregunta 3
print("¿En que ciudad está la Sagrada Familia?")
print("a) Tarragona")
print("b) Barcelona")
print("c) Girona")

opcion = input('Respuesta 3: ')

comprobar(opcion)
puntuacion = correcta(opcion, "b", puntuacion)
print()

print("Tu puntuación es de: " + str(puntuacion))

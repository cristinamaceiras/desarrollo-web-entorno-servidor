puntuacion = 0

#pregunta 1
print("¿En que ciudad está la torre Eiffel?")
print("a) Madrid")
print("b) Londres")
print("c) Paris")

opcion = input('Respuesta 1: ')

while (opcion != 'a') & (opcion != 'b') & (opcion != 'c'):
    opcion = input('Debes introducir solo a, b o c: ')

if opcion == "a" or opcion == "b":
    puntuacion -= 5
else:
    puntuacion += 10

print()

#pregunta 2
print("¿En que ciudad está la torre de Hércules?")
print("a) A Coruña")
print("b) Lugo")
print("c) Pontevedra")

opcion = input('Respuesta 2: ')

while (opcion != 'a') & (opcion != 'b') & (opcion != 'c'):
    opcion = input('Debes introducir solo a, b o c: ')

if opcion == "b" or opcion == "c":
    puntuacion -= 5
else:
    puntuacion += 10

print()

#pregunta 3
print("¿En que ciudad está la Sagrada Familia?")
print("a) Tarragona")
print("b) Barcelona")
print("c) Girona")

opcion = input('Respuesta 3: ')

while (opcion != 'a') & (opcion != 'b') & (opcion != 'c'):
    opcion = input('Debes introducir solo a, b o c: ')

if opcion == "a" or opcion == "c":
    puntuacion -= 5
else:
    puntuacion += 10

print()
print("Tu puntuación es de: " + str(puntuacion))

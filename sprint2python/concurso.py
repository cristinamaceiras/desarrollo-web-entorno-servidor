print("¿En que ciudad está la torre Eiffel?")
print("a) Madrid")
print("b) Londres")
print("c) Paris")

opcion = input('Respuesta: ')

while (opcion != 'a') & (opcion != 'b') & (opcion != 'c'):
    opcion = input('Debes introducir solo a, b o c: ')

if opcion == "a" or opcion == "b":
    print("Incorrecto.")
else:
    print("¡¡Correcto!!")

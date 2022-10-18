import time

from factorial import func_factorial
from factorial2 import func_factorial2

def comprobar(op):
    while (op != "a") & (op != "b"):
        op = input('Debes introducir solo a o b: ')

print("¿De que modo quiere calcular el factorial?")
print("a) Recursivo")
print("b) No recursivo")
opcion = input("Respuesta:  ")

comprobar(opcion)

print("Teclee un número para calcular su factorial:")
num = input("Número: ")

tiempo1 = time.time()

if (opcion == "a"):
    resultado = func_factorial(int(num))
else:
    resultado = func_factorial2(int(num))

tiempo2 = time.time()
tiempoCalculado = tiempo2 - tiempo1

print("El factorial de " + num + " es " + str(resultado))
print('El tiempo de ejecución fue:' + str(tiempoCalculado) + ' s')

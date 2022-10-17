from factorial import func_factorial

print("Teclee un número para calcular su factorial:")
num = input('Número: ')

resultado = func_factorial(int(num))

print("El factorial de " + num + " es " + str(resultado))
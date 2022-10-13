def func_factorial(n):
    if n == 0:
        resultado = 1
    if n == 1:
        resultado = 1
    if n > 1:
        resultado = (n * func_factorial(n-1))
    
    return resultado
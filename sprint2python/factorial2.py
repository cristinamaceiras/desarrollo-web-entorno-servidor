def func_factorial2(n):
    resultado = 1

    if n == 0:
        resultado = 1
    elif n == 1:
        resultado = 1
    else:
        while(n>1): 
            resultado *= n
            n-=1
    return resultado

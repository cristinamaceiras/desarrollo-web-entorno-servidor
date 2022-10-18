import random

def comprobar(op):
    while (op != "piedra") & (op != "papel") & (op != "tijera"):
        op = input('Debes introducir solo piedra, papel o tijera: ')

lista = ["piedra", "papel", "tijera"]
cont = 0
ganar = 0

print("Vamos a jugar una partida (5 rondas)")

while(cont < 5):
    print()
    print("Escoge tu jugada (piedra, papel o tijera)")
    jugador = input("Tu jugada: ")
    comprobar(jugador)

    maquina = random.choice(lista)
    print("Ordenador: " + maquina)

    if jugador == "piedra":
        if maquina == "piedra":
            print("Empate, no vale la ronda")
            cont += 1
        elif maquina == "tijera":
            print("Has ganado, " + jugador + " gana a " + maquina)
            cont += 1
            ganar += 1
        else:
            print("Has perdido, " + maquina + " gana a " + jugador)
            cont += 1
    elif jugador == "papel":
        if maquina == "papel":
            print("Empate, no vale la ronda")
            cont += 1
        elif maquina == "piedra":
            print("Has ganado, " + jugador + " gana a " + maquina)
            cont += 1
            ganar += 1
        else:
            print("Has perdido, " + maquina + " gana a " + jugador)
            cont += 1
    else:
        if maquina == "tijera":
            print("Empate, no vale la ronda")
            cont += 1
        elif maquina == "papel":
            print("Has ganado, " + jugador + " gana a " + maquina)
            cont += 1
            ganar += 1
        else:
            print("Has perdido, " + maquina + " gana a " + jugador)
            cont += 1

print()
if ganar > 3:
    print("¡Ganaste!")
else:
    print("Perdiste...")

print("Ganaste " + str(ganar) + " de 5 rondas")

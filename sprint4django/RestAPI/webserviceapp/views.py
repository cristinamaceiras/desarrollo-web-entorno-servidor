from django.shortcuts import render
from django.http import HttpResponse, JsonResponse

from .models import Tcanciones, Tcomentarios

# Create your views here.

def pagina_de_prueba (request):
	return HttpResponse("<h1>Hola caracola</h1>");

def devolver_canciones(request):
	lista = Tcanciones.objects.all()
	respuesta_final = []
	for fila_sql in lista:
		diccionario = {}
		diccionario['id'] = fila_sql.id
		diccionario['nombre'] = fila_sql.nombre
		diccionario['url_imagen'] = fila_sql.url_imagen
		diccionario['artista'] = fila_sql.artista
		diccionario['anho'] = fila_sql.anho
		respuesta_final.append(diccionario)
	return JsonResponse(respuesta_final, safe=False)

def devolver_cancion_por_id(request, id_solicitado):
	cancion = Tcanciones.objects.get(id = id_solicitado)
	comentarios = cancion.tcomentarios_set.all()
	lista_comentarios = []
	for fila_comentario_sql in comentarios:
		diccionario = {}
		diccionario['id'] = fila_comentario_sql.id
		diccionario['comentario'] = fila_comentario_sql.comentario
		lista_comentarios.append(diccionario)
	resultado = {
		'id': cancion.id,
		'nombre': cancion.nombre,
		'url_imagen': cancion.url_imagen,
		'artista': cancion.artista,
		'fecha': cancion.anho,
		'comentario': lista_comentarios
	}
	return JsonResponse(resultado, json_dumps_params={'ensure_ascii': False})

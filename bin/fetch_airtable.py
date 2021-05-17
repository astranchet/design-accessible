# coding: utf-8

import os
import csv
import json

import requests
from airtable import airtable

from os.path import join, dirname
from dotenv import load_dotenv

def get_env():
   # Récupérer les variables d'environnement (API Airtable)
	env = join(dirname(__file__), '.env')
	load_dotenv(env)

def get_ressources():
	api = airtable.Airtable(os.getenv('AIRTABLE_BASE_ID'), os.getenv('AIRTABLE_API_KEY'))
	records = api.get(os.getenv('AIRTABLE_TABLE'))

	ressources = records['records']

	while records.get('offset'):
		records = api.get(
			os.getenv('AIRTABLE_TABLE'),
			offset=records.get('offset')
		)
		ressources += records['records']

	# ,limit=10
	return ressources

def print_ressources(ressources):
	print("Title: Ressources")
	print("----")
	print("Ressources:")

	for ressource in ressources:
		# TODO check if fields exists
		print("-")
		if 'Nom' in ressource['fields']:
			print('	title: "{}"'.format(ressource['fields']['Nom']))

		if 'URL' in ressource['fields']:
			print("	url: >")
			print("		"+ressource['fields']['URL'])

		if 'Auteur' in ressource['fields']:
			print("	source: " + ressource['fields']['Auteur'])

		if 'Description' in ressource['fields']:
			print('	description: "{}"'.format(ressource['fields']['Description']))

		if 'Langue' in ressource['fields']:
			if ressource['fields']['Langue'] == 'Français':
				print("	lang: fr")
			if ressource['fields']['Langue'] == 'Anglais':
				print("	lang: en")

		if 'Phase' in ressource['fields']:
			print("	phase: " + ",".join(ressource['fields']['Phase']))

		if 'Type de ressource' in ressource['fields']:
			print("	type: " + ",".join(ressource['fields']['Type de ressource']))

		if 'Thématique' in ressource['fields']:
			print("	thematique: " + ", ".join(ressource['fields']['Thématique']))

		if 'Date' in ressource['fields']:
			print("	date: " + ressource['fields']['Date'])


get_env()
ressources = get_ressources()
print_ressources(ressources)
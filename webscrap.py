from bs4 import BeautifulSoup
import requests

with open('cd.html') as html_files:
    soup=BeautifulSoup(html_files,'lxml')

article=soup.find('div',class_='main')
headline=article.text
print(headline)
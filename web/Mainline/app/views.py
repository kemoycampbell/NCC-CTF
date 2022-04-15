from flask import render_template, request
from app import app
import sqlite3

conn = sqlite3.connect('ctf.db')
cur = conn.cursor()

@app.route('/')
def home():
   return render_template('home.html')


@app.post('/flag')
def get_flag():
    try:
        username = request.form['username']
        password = request.form['password']
        result = cur.execute("SELECT flag FROM secrets WHERE username = '%s' AND password = '%s';" % (username, password)).fetchone()
        if not result:
            return '<h1>Not elite enough :(</h1>'
        return f'<h1>step 1 in your l33t haxx0r journey: complete! {result[0]}</h1>'
    except Exception:
        return render_template('home.html')
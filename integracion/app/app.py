from flask import Flask, render_template, request, jsonify
from flask_mysqldb import MySQL
import MySQLdb.cursors

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')

# Para enviar un correo electrónico
@app.route("/integraciones/enviar_correo/<email_usuario>", methods=["POST"])
def enviar_correo(email_usuario):
     return 'Correo electrónico enviado exitosamente'

# Para publicar en una red social
@app.route("/integraciones/publicar_red_social", methods=["POST"])
def publicar_red_social():
    return 'Publicación en la red social exitosa'

if __name__ == "__main__":
    app.run(port=5001)
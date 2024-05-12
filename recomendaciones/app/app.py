from flask import Flask, render_template, request, jsonify
from flask_mysqldb import MySQL
import MySQLdb.cursors

app = Flask(__name__)


app.config['MYSQL_HOST'] = 'mysql_8.3.0_recomendaciones'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = 'password'
app.config['MYSQL_DB'] = 'recomendaciones'
mysql = MySQL(app)

@app.route('/')
def index():
    recomendaciones_db_connected = verificar_conexion_recomendaciones()
    return render_template('index.html', recomendaciones_db_connected=recomendaciones_db_connected)
def verificar_conexion_recomendaciones():
    try:
        cur = mysql.connection.cursor()
        cur.execute('SELECT 1')
        cur.close()
        return True  
    except:
        return False


# Obtener recomendaciones del usuario
@app.route("/recomendaciones/usuario/<id_usuario>", methods=["GET"])
def obtener_recomendaciones(id):
    pass

# Agregar una nueva recomendación a un usuario
@app.route("/recomendaciones/agregar/<id_usuario>", methods=["POST"])
def agregar_recomendacion(id):
    pass

if __name__ == "__main__":
    app.run()
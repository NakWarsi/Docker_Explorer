#Product Service

#import framework

from flask import Flask

from flask_restful import Resource, Api

#Application

app = Flask(__name__)

api=Api(app)

class Product(Resource):
	def get(self):
		return{ 'product':['cloud-book','IoT-book','WSN-book','Arm-contex-book']}

#create routes

api.add_resource(Product,'/')

#Run the application

if __name__=='__main__':
	app.run(host='0.0.0.0',port=80, debug=True)


From python:2.7-slim

WORKDIR /app

ADD . /app

RUN pip install --trusted-host pypi.python.org -r requirement.txt

EXPOSE 80

ENV NAME iot

CMD ["python","docker.py"]

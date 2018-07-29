# Simple dependency injection example project


Build the docker image using the Dockerfile
```bash
docker build -t phpd .
```

Run below command to bring the container up
```bash
docker run -d -p 80:80 -v "$PWD":/app --name simple phpd
```

Check the running container in browser
```bash
# thilanga's Music Service
http://localhost?user=thilanga
 
# pittado's Music Service
http://localhost?user=pittado

# No user
http://localhost
```
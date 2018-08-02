# Simple dependency injection example project


Run the container
```bash
docker-compose up -d --build
```

Check the running container in browser
```bash
# Alice's Music Service
http://localhost:8080?user=alice
 
# Bob's Music Service
http://localhost:8080?user=bob

# No user
http://localhost:8080
```
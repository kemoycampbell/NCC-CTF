FROM python:3

RUN apt-get update && apt-get install -y netcat

COPY persistence.py persistence.py
COPY wordlist.txt wordlist.txt

CMD ["/bin/bash", "-c", "nc -lkp 9999 --sh-exec python3 ./persistence.py"]
EXPOSE 9999
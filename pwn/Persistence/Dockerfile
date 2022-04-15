FROM python:3-slim

RUN apt-get update && apt-get install -y \
    xinetd

COPY ctf.xinetd /etc/xinetd.d/ctf
COPY ./src /ctf/

CMD ["./start.sh"]

EXPOSE 9999
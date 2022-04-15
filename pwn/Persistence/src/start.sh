#! /bin/sh

/etc/init.d/xinetd start;
cd /ctf
/usr/local/bin/python -u persistence.py
tail -f /dev/null

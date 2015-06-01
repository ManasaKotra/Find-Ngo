FROM    ubuntu:14.04

RUN     apt-get update
RUN     apt-get install -y git curl nodejs nodejs-dev npm
RUN     ln -s /usr/bin/nodejs /usr/bin/node

RUN     mkdir /apps
ADD     . /apps/Find-Ngo

WORKDIR /apps/Find-Ngo

EXPOSE  8000
CMD ["node", "/apps/Find-Ngo/server.js"]

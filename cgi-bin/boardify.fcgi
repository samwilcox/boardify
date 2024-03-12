#!/usr/bin/env python

from flup.server.fcgi import WSGIServer
from boardify import app

WSGIServer(app).run()
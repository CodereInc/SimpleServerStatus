import os
import time
import sys
import atexit
import psutil
import numpy as np
import interval 
import requests
import math
import random

device_name = "YOUR_DEVICE_NAME"
password = "YOUR_PASSWORD"
url = "YOUR_API_URL"


device_id = random.randint(100000,999999);
while True:
    time.sleep(1)
    cpuload = psutil.cpu_percent(interval=1)
    print ("CPU load:" + str(cpuload))
    memusage = psutil.virtual_memory()
    used = str(int(memusage.used/1024/1024))
    full = str(int(memusage.total/1024/1024))
    print ("Memory:" + used + "/" + full)
    net_msg = psutil.net_io_counters()
    bytes_sent, bytes_recv = net_msg.bytes_sent, net_msg.bytes_recv
    timea = int(time.time( ))
    net_msg = psutil.net_io_counters ( )
    bytes_sent2,bytes_recv2 = net_msg.bytes_sent, net_msg.bytes_recv
    uprate = bytes_sent2 - bytes_sent
    downrate = bytes_recv2 - bytes_recv
    diskinfo = psutil.disk_usage("/")
    totaldisk = str(int((diskinfo.total) /1024 / 1024 / 1024))
    freedisk = str(int((diskinfo.free) / 1024 / 1024 / 1024))
    data = {"cpu": cpuload,"memused": used,"memfull": full,"uprate": uprate,"downrate": downrate,"totaldisk": totaldisk,"devicename": device_name,"password": password,"deviceid": device_id,"freedisk": freedisk}
    res = requests.post(url=url,data=data)
    print(res.text)

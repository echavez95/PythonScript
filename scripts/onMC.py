import RPi.GPIO as GPIO
GPIO.setmode(GPIO.BCM)
GPIO.setup(13, GPIO.OUT)
GPIO.output(13, False)
exit(0)


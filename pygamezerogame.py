
import pgzrun


from pgzero.actor import Actor

alien = Actor('alien')
alien.topright = 250, 10

WIDTH = 500
HEIGHT = alien.height + 20

colour = (90,10,200)

def draw():
    screen.clear()
    screen.fill(colour)
    alien.draw()

def update():
    alien.left += 2
    if alien.left > WIDTH:
        alien.right = 0
def set_alien_normal():
    alien.image = 'alien'

def set_alien_hurt():
    alien.image = 'alien_hurt'
    sounds.eep.play()
    print('ouch')
    clock.schedule_unique(set_alien_normal, 0.5)

def on_mouse_down(pos):
    if alien.collidepoint(pos):
        set_alien_hurt()
    else:
        print("you missed")

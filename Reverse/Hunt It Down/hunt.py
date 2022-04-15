import sys
import codecs
import base64

FLAG = 'NCC{e4sy_p3asy}'

def croc():
    return base64.b64decode('X24wXw=='.encode('ascii')).decode('ascii')

def aardvark():
    p = ['01111011', '01000011', '01001110']
    final_p = []
    for index, i in enumerate(p):
        i = chr(int(i, 2))
        final_p.append(i)
        if index == 1:
            final_p.append(i)
    return ''.join(i for i in final_p[::-1])

def is_flag(text):
    true_flag = make_flag()
    if text == true_flag:
        return true_flag
    return None

def bat():
    return codecs.encode('chfu', 'rot_13')

def make_flag():
    return aardvark() + bat() + croc() + dingo() + chr(int('0x7d', 0))

def dingo():
    return ''.join(chr(i) for i in [115, 51, 99, 114, 51, 116, 115])

def main():
    try:
        if sys.argv[1] == FLAG:
            print('Ha, nice try! But nope.')
            return
        flag = is_flag(sys.argv[1])
        if flag:
            print(f'Not so easy peasy... {flag}')
            return
        print('Sorry, no dice.')
        return
    except IndexError:
        print('Usage: hunt.py [flag]')
        return

if __name__ == '__main__':
    main()

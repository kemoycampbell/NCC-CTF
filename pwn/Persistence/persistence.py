#!/usr/bin/env python3

import random
import base64
import re
import math

def add():
    num1 = random.randint(0, 10)
    num2 = random.randint(0, 10)
    solution = num1 + num2
    answer = input(f'{num1} + {num2} = ')
    check_answer(int(answer), solution)

def multiply():
    num1 = random.randint(0, 100)
    num2 = random.randint(100, 500)
    solution = num1 * num2
    answer = input(f'{num1} * {num2} = ')
    check_answer(int(answer), solution)

def divide():
    num1 = random.randint(5000000, 1000000000)
    num2 = random.randint(0, 5000000)
    solution = num1 / num2
    answer = input(f'{num1} / {num2} = ')
    check_answer(round(float(answer), 5), round(solution, 5))

def modulo():
    num1 = random.randint(5000000, 1000000000)
    num2 = random.randint(0, 5000000)
    solution = num1 % num2
    answer = input(f'{num1} % {num2} = ')
    check_answer(int(answer), solution)

def factorialize():
    num = random.randint(-14, 14)
    solution = math.factorial(num)
    answer = input(f'{num}! = ')
    check_answer(int(answer), solution)

def to_chr():
    num = random.randint(32, 126)
    solution = chr(num)
    answer = input(f"Quick, what character does the unicode code {num} represent? ")
    check_answer(answer, solution)

def enter():
    answer = input("Now here's a brainteaser: 00001101. ")
    check_answer(answer, '')

def from_base64():
    solution = get_word_from_file()
    print('I cannot communicate with humans, help me please!')
    answer = input(f"{base64.b64encode(solution.encode('ascii')).decode('ascii')}: ")
    check_answer(answer, solution)

def match_regex():
    patterns = ['(FI|A)+', '(YE|OT)K', '(.)[IF]+', '[NODE]+', '(FY|F|RG)+',
                '(Y|F)(.)\2[DAF]\1', '(U|O|I)*T[FRO]+', '[KANE]*[GIN]*',
                '(VE|IL?|\sS)*[DIES]?', '[HELP]*(Y|QU|I)?', '[HAIR]*(D|O)*',
                '(\W|\w)?[CLVST3R]*', '[HAV3N]?[REA]*', '[EVA]?[MASONIC\s]?',
                '[STARV3]*(O|H)?']
    index = random.randint(0, 14)
    pattern = re.compile(patterns[index])
    answer = input(f"{patterns[index]}: ")
    if not pattern.fullmatch(answer):
        raise ValueError

def to_hex():
    word = get_word_from_file()
    solution = word.encode('utf-8').hex()
    print('16 is my favorite number, 10 sucks. Now convert me!')
    answer = input(f'{word}: ')
    check_answer(answer.replace(' ', ''), solution)

def check_answer(user_answer, solution):
    if user_answer != solution:
        raise ValueError

def get_word_from_file():
    with open('wordlist.txt', 'r') as f:
        words = f.readlines()[0].split(', ')
    index = random.randint(0, 5999)
    return words[index]

def main():
    try:
        add()
        multiply()
        divide()
        modulo()
        factorialize()
        to_chr()
        enter()
        from_base64()
        match_regex()
        to_hex()
        print("Congratulations! Flag: NCC{y0u_g0t_gr1t}")
    except Exception as e:
        print('WRONG ANSWER! PERSIST!')

if __name__ == '__main__':
    main()
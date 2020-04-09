# -*- coding: utf-8 -*-

def read_input():
	lines = []
	with open('【編輯者專用】寶可夢探險尋寶食譜 - 機率排行.tsv', 'r', encoding='utf-8') as file:
		lines = file.readlines()
	# removes headers
	return lines[2:]

# match the top line of pokemon to bot line of chance
def format_lines(lines):
	reformatted = []
	temp = ''
	for i, line in enumerate(lines):
		line = line.strip().replace(' ', '').replace('\t\t', '\t').replace('#','')
		if i % 2 == 0:
			temp = line
		else:
			reformatted.append(temp +'\t'+ line)
	return reformatted

# crafts the dictionary of 'pot': ['pokeid', 'pokechance']
def craft_dictionary(reformatted):
	pot_dict = {}
	for record in reformatted:
		segs = record.split('\t')
		poke_id, poke_name = segs[0], segs[1]
		segs = segs[2:]
		size_half = int(len(segs)/2)
		pot_names, pot_chances = segs[:size_half], segs[size_half:]
		for name, chance in zip(pot_names, pot_chances):
			if name in pot_dict:
				pot_dict[name].append([poke_id, chance])
			else:
				pot_dict[name] = [[poke_id, chance]]
	print(pot_dict)
	return pot_dict

# writes output as JavaScript syntax
def write_javascript(pot_dict):
	with open('pot_chance.js', 'w', encoding='utf-8') as out:
		text = "var pot_chance = {\n"
		for (key, value) in pot_dict.items():
			text += '\t"方可樂{}":{},\n'.format(key, value)
		text = text[:-2]
		text += '\n}'
		out.write(text)


if __name__ == "__main__":
	lines = read_input()
	reformatted = format_lines(lines)
	pot_dict = craft_dictionary(reformatted)
	write_javascript(pot_dict)







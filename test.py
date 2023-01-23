import yara as y
rule = y.compile(source='rule foo: bar {strings: $a = "xyz" condition: $a}')
matches = rule.match(data='abcdefgjiklmnoprstuvwxyz')

print(matches)


# *rule NumberOne
# {
# meta:
#desc = "Sonala"
#weight = 10
# strings:
# $a = {6A 40 68 00 30 00 00 6A 14 8D 91}
# $b = {8D 4D B0 2B C1 83 C0 27 99 6A 4E 59 F7 F9}
# $c = "UVODFRYSIHLNWPEJXQZAKCBGMT"
# condition:
# $a or $b or $c
# }

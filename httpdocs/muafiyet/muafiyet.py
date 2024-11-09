import PyPDF2

# PDF dosyasını aç
pdf_file = open('b.pdf', 'rb')
pdf_reader = PyPDF2.PdfReader(pdf_file)

# Her sayfayı oku ve txt dosyasına yaz
with open('b.txt', 'w') as txt_file:
    for page_num in range(len(pdf_reader.pages)):
        page = pdf_reader.pages[page_num]
        txt_file.write(page.extract_text())
txt_file.close()

txt_file = open('b.txt', 'r')
lines = txt_file.readlines()
i = 0
first_column = []
second_column = []
for line in lines:
    parts = line.split(':')
    first_column.append(parts[0])
    second_column.append(parts[1])
    i = i + 1
    if i == 1:
        break

# Her satırın başındaki ve sonundaki boşlukları kaldır
second_column = [line.strip() for line in second_column]

print(first_column[0])
print(second_column[0])
# PDF dosyasını kapat
pdf_file.close()
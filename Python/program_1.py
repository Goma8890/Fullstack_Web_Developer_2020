# Ask for a sentence
sentence = input("Enter a sentence: ")
sentence_length = len(sentence)

# Print the length of the sentence
print(sentence_length)

# Ask for the file name (.txt)
file_name = input("Enter a file name:")
file_name = f"{file_name}.txt"

# Write the sentence to the file
with open(file_name, "w") as f:
    f.write(sentence)
    f.close()

# Run the program from your command lines
print(f"You've written {sentence_length} characters to {file_name}")
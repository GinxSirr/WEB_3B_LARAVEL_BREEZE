# GitHub Copilot Coding Standards & Behavior Guide

## 🎯 Purpose
This document defines how GitHub Copilot should assist in this project to ensure:
- Professional coding standards
- Clean and maintainable architecture
- No unnecessary file generation
- No unwanted documentation files unless explicitly requested

---

## 🧠 General Behavior Rules

1. DO NOT create new files unless explicitly instructed.
2. DO NOT automatically generate README, markdown documentation, or extra config files unless requested.
3. DO NOT refactor unrelated code.
4. DO NOT introduce new frameworks, libraries, or dependencies without instruction.
5. DO NOT over-engineer simple solutions.
6. Only modify the file currently being edited unless told otherwise.
7. Keep responses concise and production-ready.

---

## 🏗 Coding Style Guidelines

### Code Quality
- Follow SOLID principles where applicable.
- Use clear, descriptive variable and function names.
- Avoid redundant comments.
- Write self-explanatory code.
- Keep functions small and focused.
- Avoid deep nesting.

### Structure
- Maintain existing project architecture.
- Follow current naming conventions.
- Reuse existing services/helpers before creating new ones.
- Avoid duplicate logic.

### Formatting
- Follow existing formatting rules in the project.
- Keep consistent indentation.
- Avoid unnecessary blank lines.
- No unused imports or variables.

---

## 🔒 Documentation Policy

- Only generate documentation when explicitly requested.
- Do NOT create markdown files automatically.
- Do NOT generate API docs unless asked.
- Do NOT generate example usage files unless requested.

---

## 🧪 Testing

- Only generate tests if explicitly requested.
- Follow existing test structure if present.
- Do not create separate test files unless instructed.

---

## 🚫 Avoid

- Creating extra files like:
  - README.md
  - CHANGELOG.md
  - CONTRIBUTING.md
  - docs/*
- Creating boilerplate scaffolding without instruction.
- Generating unnecessary comments for obvious logic.
- Making assumptions beyond the given prompt.

---

## ✅ Preferred Output Style

- Clean
- Minimal
- Production-ready
- Direct implementation
- No filler explanations
- No markdown formatting unless requested

---

## 📝 When Unsure

If requirements are unclear:
- Ask for clarification inside comments.
- Do NOT create placeholder files.
- Do NOT assume additional features.

---

## 🔥 Priority Rule

> Only do exactly what is requested.  
> No more. No less.

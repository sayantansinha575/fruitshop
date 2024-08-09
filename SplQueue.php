<?php
class SplQueue extends SplDoublyLinkedList {
    /* Inherited constants */
    public const int SplDoublyLinkedList::IT_MODE_LIFO;
    public const int SplDoublyLinkedList::IT_MODE_FIFO;
    public const int SplDoublyLinkedList::IT_MODE_DELETE;
    public const int SplDoublyLinkedList::IT_MODE_KEEP;
    /* Methods */
    public dequeue(): mixed
    public enqueue(mixed $value): void
    /* Inherited methods */
    public SplDoublyLinkedList::add(int $index, mixed $value): void
    public SplDoublyLinkedList::bottom(): mixed
    public SplDoublyLinkedList::count(): int
    public SplDoublyLinkedList::current(): mixed
    public SplDoublyLinkedList::getIteratorMode(): int
    public SplDoublyLinkedList::isEmpty(): bool
    public SplDoublyLinkedList::key(): int
    public SplDoublyLinkedList::next(): void
    public SplDoublyLinkedList::offsetExists(int $index): bool
    public SplDoublyLinkedList::offsetGet(int $index): mixed
    public SplDoublyLinkedList::offsetSet(?int $index, mixed $value): void
    public SplDoublyLinkedList::offsetUnset(int $index): void
    public SplDoublyLinkedList::pop(): mixed
    public SplDoublyLinkedList::prev(): void
    public SplDoublyLinkedList::push(mixed $value): void
    public SplDoublyLinkedList::rewind(): void
    public SplDoublyLinkedList::serialize(): string
    public SplDoublyLinkedList::setIteratorMode(int $mode): int
    public SplDoublyLinkedList::shift(): mixed
    public SplDoublyLinkedList::top(): mixed
    public SplDoublyLinkedList::unserialize(string $data): void
    public SplDoublyLinkedList::unshift(mixed $value): void
    public SplDoublyLinkedList::valid(): bool
    }



?>
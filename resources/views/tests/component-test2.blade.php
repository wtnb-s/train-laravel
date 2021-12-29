<x-tests.app>
    <x-slot name="header">ヘッダー２</x-slot>
    テストコンポーネント2
    <x-test-class-base classBaseMessage="メッセージです" />
    <div class="mb-4">
        <x-test-class-base classBaseMessage="メッセージです" defaultMessage="初期値から変更" />
    </div>
</x-tests.app>